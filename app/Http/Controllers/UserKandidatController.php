<?php

namespace App\Http\Controllers;

// use App\UserKandidat;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Validator;
// use JWTAuth;
// use Tymon\JWTAuth\Exceptions\JWTException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use JWTFactory;
use JWTAuth;
use JWTAuthException;
use Mail,DB;
use App\UserKandidat;
use App\DataPribadiModel;
use App\KandidatVerification;

use Illuminate\Support\Facades\Auth;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Password;
use Laravel\Socialite\Facades\Socialite;

// use Illuminate\Mail\Mailer;


class UserKandidatController extends Controller
{

    public function logout(Request $request){
        config()->set( 'auth.defaults.guard', 'kandidat' );
        try{
            $this->validate($request,['token'=> 'required']);
            JWTAuth::invalidate($request->input('token'));
            return response()->json(['sukses' => true,'pesan'=>'Berhasil Log Out']);
        }catch(\Exception $e){
            return response()->json(['sukses'=>false, 'pesan'=>'Gagal Logout']);
        }
    }
    
    public function recover(Request $request)
    {
        Auth::guard('kandidat');
        Password::broker('kandidat');
        $user = UserKandidat::where('email', $request->email)->first();
        if (!$user) {
            $error_message = "Your email address was not found.";
            return response()->json(['success' => false, 'error' => ['email'=> $error_message]], 401);
        }

        try {
            Password::sendResetLink($request->only('email'), function (Message $message) {
                $message->subject('Your Password Reset Link');
            });

        } catch (\Exception $e) {
            //Return with error
            $error_message = $e->getMessage();
            return response()->json(['success' => false, 'error' => $error_message], 401);
        }

        return response()->json([
            'success' => true, 'data'=> ['message'=> 'A reset email has been sent! Please check your email.']
        ]);
    }
    public function verifyUser($verification_code)
    {
        $check = DB::table('user_kandidat_verification')->where('token',$verification_code)->first();

        if(!is_null($check)){
            $user = UserKandidat::find($check->id_kandidat);

            if($user->status_akun == 1){
                return response()->json([
                    'success'=> true,
                    'message'=> 'user already verified'
                ]);
            }

            DB::table('user_kandidat_verification')->where('token',$verification_code)->delete();
            if($user->update(['status_akun' => 1])){
                return response()->json([
                    'success'=> true,
                    'message'=> 'You have successfully verified your email address.'
                ]);
            }else{
                return response()->json([
                    'success'=> true,
                    'message'=> 'Fail'
                ]);
            }
           
        }

        return response()->json(['success'=> false, 'error'=> "Verification code is invalid."]);

    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        config()->set( 'auth.defaults.guard', 'kandidat' );
        \Config::set('jwt.user', 'App\UserKandidat'); 
		\Config::set('auth.providers.users.model', \App\UserKandidat::class);
		$credentials = $request->only('email', 'password');
        $token = null;
        
        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        $data = DB::table('data_pribadi')->where('id_kandidat',auth()->user()->id)->get();

        $res['status'] = 200;
        $res['messages'] = 'Login Success';
        $res['user'] = auth()->user();
        $res['data'] = $data;
        $res['token'] = $token;        
        return response()->json($res);

        
    }

    public function register(Request $request)
    {
        $check = DB::table('user_kandidat')->where('email',$request->email)->first();

        if(!is_null($check)){
            return response()->json([
                'status'=> false,
                'message'=> 'Account already registered..'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:user_kandidat',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = UserKandidat::create([
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);
        $email = $request->email;
        $verification_code = str_random(30); //Generate verification code
        DB::table('user_kandidat_verification')->insert(['id_kandidat'=>$user->id,'token'=>$verification_code]);
        $role = 'user';
        $subject = "Minejobs | Verifikasi Email Anda";
        Mail::send('email.verify', ['verification_code' => $verification_code, 'user'=>$role],
            function($mail) use ($email, $subject){
                $mail->from('donotreply@minejobs.id');
                $mail->to($email);
                $mail->subject($subject);
            });

        $token = JWTAuth::fromUser($user).rand(0, 9);

        return response()->json(compact('user','token'),201);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }
        $data = DataPribadiModel::where('id_kandidat',$user->id)->get();

        $res['message'] = 'data ditemukan';
        $res['data'] = $data;

        return $res;
    }

    public function redirectToProvider()
    {
         $config = [
            'client_id'     => env('GOOGLE_ID'),
            'client_secret' => env('GOOGLE_SECRET'),
            'redirect'      => env('GOOGLE_URL_KANDIDAT'), 
        ];
        
        $provider = Socialite::buildProvider(\Laravel\Socialite\Two\GoogleProvider::class, $config);
            
        return $provider->redirect();
        // return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {

        config()->set( 'auth.defaults.guard', 'kandidat' );
        $config = [
            'client_id'     => env('GOOGLE_ID'),
            'client_secret' => env('GOOGLE_SECRET'),
            'redirect'      => env('GOOGLE_URL_KANDIDAT'), 
        ];
        
        $buildProvider = Socialite::buildProvider(\Laravel\Socialite\Two\GoogleProvider::class, $config);
            
            
        $user = $buildProvider->stateless()->user();
        $email = $user->email;
        $authUser = $this->findOrCreateUser($user, 'google');
        // Auth::login($authUser, true);
        // $token = JWTAuth::fromUser($user);

        $token = JWTAuth::fromUser($authUser);
        $res['status'] = 200;
        $res['messages'] = 'success';
        $res['token'] = $token;
        // $res['real_token'] = substr($res['token'], 0, -1);
        $res['user'] = $user;
        return response()->json($res);

        // return redirect('/');
    }

    public function findOrCreateUser($user, $provider)
    {
        $authUser = UserKandidat::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }
        else{
            $data = UserKandidat::create([
                'email'    => !empty($user->email)? $user->email : '' ,
                'socialite_provider' => $provider,
                'socialite_id' => $user->id,
                'status_akun' => 1
            ]);
            return $data;
        }
    }
}
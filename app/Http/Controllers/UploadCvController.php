<?php

namespace App\Http\Controllers;
use App\UploadCv;
use Illuminate\Support\Facades\Validator;
use File;
use Carbon\Carbon;

use Illuminate\Http\Request;

class UploadCvController extends Controller
{
    // Route::post('uploadcv','UploadCvController@PostCv');
    // Route::get('uploadcv','UploadCvController@GetCv');
    // Route::put('uploadcv','UploadCvController@UpdateCv');
    // Route::delete('uploadcv','UploadCvController@DeleteCv');

    public function PostCv(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'id_kandidat' => 'required|unique:upload_cv',
            'file_cv' => 'required|mimes:pdf|max:2048'
        ]
    );
    if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
    }
    //upload image
    $file = $req->file('file_cv');
    $url='';
    if($file){

        if(!File::isDirectory(storage_path('app/public/user/cv'))){
            //create folder 
            File::makeDirectory(storage_path('app/public/user/cv'));
        }

        $fileName = Carbon::now()->timestamp.'_'.uniqid().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path('app/public/user/cv'),$fileName);

        $url = url('/storage/user/cv/'.$fileName);
    }

    $input = new UploadCv;
    $input->id_kandidat = $req->id_kandidat;
    $input->url_cv = $url;
    $input->save();

    $res['message'] = 'berhasil post';
    $res['data'] = $input;
    return response()->json($res, 200);
    }
    public function GetCv($id)
    {
        $data = UploadCv::where('id_kandidat',$id)->paginate(10);
        if(count($data)>0){
            $res['count'] = count($data);
            $res['message'] = 'data ditemukan';
            $res['data'] = $data;
            return $res;
        }else{
            $res['count'] = count($data);
            $res['message'] = 'data tidak ditemukan';
            return $res;
        }
    }
    public function UpdateCv(Request $req, $id)
    {
        $data = UploadCv::find($id,'id')->first();
        $data->id_kandidat = $req->id_kandidat;
        $file = $req->file('file_cv');
        $url='';
        if($file){

        if(!File::isDirectory(storage_path('app/public/user/cv'))){
            //create folder 
            File::makeDirectory(storage_path('app/public/user/cv'));
        }

        $fileName = Carbon::now()->timestamp.'_'.uniqid().'.'.$file->getClientOriginalExtension();
        $file->move(storage_path('app/public/user/cv'),$fileName);
        $data->url_cv = $req->url('/storage/user/cv/'.$fileName);

    }
        if($data){
            if($data->save()){
                $res['message'] = 'Berhasil Update';
                $res['data'] = $data;
                return $res;
            }else{
                $res['message'] = 'Gagal Update';
                $res['data'] = $data;
                return $res;
            }
        }else{
            
            $res['message'] = 'data tidak ditemukan';
            return $res;
        }
    }
    public function DeleteCv($id)
    {
        $data = UploadCv::find($id,'id_kandidat')->first();
        if(count($data)>0){
            if($data->delete()){
                $res['message'] = 'Berhasil Dihapus';
                $res['data'] = $data;
                return $res;
            }else{
                $res['message'] = 'Gagal Dihapus';
                $res['data'] = $data;
                return $res;
            }
        }else{
            $res['count'] = count($data);
            $res['message'] = 'data tidak ditemukan';
            return $res;
        }
    }
}

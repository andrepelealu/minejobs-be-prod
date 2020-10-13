<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Image_uploaded;
use Carbon\Carbon;
use Image;
use File;
use App\DataPribadiModel;

class UploadController extends Controller
{
    public $user;
    public $iklan;
    public $perusahaan;
    public $dimensions_user;
    public $dimensions_iklan;
    public $dimensions_perusahaan;

    public function __construct()
    {
        //definis path 
        $this->user = storage_path('app/public/user');
        $this->iklan = storage_path('app/public/iklan');
        $this->perusahaan = storage_path('app/public/perusahaan');

        //definisi dimensi 
        $this->dimensions_user = '300';
        $this->dimensions_perusahaan = ['245','300','500'];
    }

    public function UploadProfileUser(Request $request,$id)
    {
        $this->validate($request,[
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //set folder storage 
        if(!File::isDirectory($this->user)){
            //create folder 
            File::makeDirectory($this->user);
        }

        //ambil file dari form 
        $file = $request->file('image');
        //create nama file 
        $fileName = Carbon::now()->timestamp.'_'.uniqid().'.'.$file->getClientOriginalExtension();
   
            $canvas = Image::canvas($this->dimensions_user, $this->dimensions_user);

            $resizeImage  = Image::make($file)->resize($this->dimensions_user, $this->dimensions_user, function($constraint) {
                $constraint->aspectRatio();
            });

            $canvas->insert($resizeImage, 'center');
            //SIMPAN IMAGE KE DALAM MASING-MASING FOLDER (DIMENSI)
            $canvas->save($this->user . '/' . $fileName);


        $data = DataPribadiModel::where('id_kandidat',$id)->first();
        $data->foto_profile = url('/storage/user/'.$fileName);
        if($data->save()){
            $res['message'] = 'Berhasil Upload Foto';
            $res['data'] =url('/storage/user/'.$fileName);
            return $data;
        }
    }

    public function UploadProfilePerusahaan(Request $request,$id)
    {
        $this->validate($request,[
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //set folder storage 
        if(!File::isDirectory($this->perusahaan)){
            //create folder 
            File::makeDirectory($this->perusahaan);
        }

        //ambil file dari form 
        $file = $request->file('image');
        //create nama file 
        $fileName = Carbon::now()->timestamp.'_'.uniqid().'.'.$file->getClientOriginalExtension();
   
            $canvas = Image::canvas($this->dimensions_user, $this->dimensions_user);

            $resizeImage  = Image::make($file)->resize($this->dimensions_user, $this->dimensions_user, function($constraint) {
                $constraint->aspectRatio();
            });

            $canvas->insert($resizeImage, 'center');
            //SIMPAN IMAGE KE DALAM MASING-MASING FOLDER (DIMENSI)
            $canvas->save($this->perusahaan . '/' . $fileName);
        // }
        // $filePath = storage_path().'/user/'.$fileName;
        // $fileContents = File::get($filePath);

        $data = DataPribadiModel::where('id_kandidat',$id)->first();
        $data->foto_profile = url('/storage/perusahaan/'.$fileName);
        if($data->save()){
            $res['message'] = 'Berhasil Upload Foto';
            $res['data'] =url('/storage/perusahaan/'.$fileName);
            return $data;
        }
    }
}

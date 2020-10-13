<?php

namespace App\Http\Controllers;

use App\ProfilPerusahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Image;
use File;

class ProfilPerusahaanController extends Controller
{
    public function PostProfilPerusahaan(Request $req)
    {

        $validator = Validator::make($req->all(), 
        [
        'id_perusahaan' => 'required|unique:profile_perusahaan',
        'nama_perusahaan' => 'required|string',
        'alamat_perusahaan' =>'required|string',
        'tentang_perusahaan' =>'required|string',
        'url_banner'=>'nullable|string',
        'foto_perusahaan'=>'nullable|string',
        'website_perusahaan'=>'nullable|string',
        'jenis_industri'=>'required|string',
        'no_telp_perusahaan'=>'required|string',
        'no_npwp_perusahaan'=>'required|string',
        'url_npwp_perusahaan'=>'nullable|string',
        'foto_perusahaan_data' => 'nullable|image:jpeg,png,jpg,gif,svg|max:2048',
        'foto_npwp_data' => 'nullable|image:jpeg,png,jpg,gif,svg|max:2048'

        ]
    );
    if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
        }
        $file_foto_perusahaan = $req->file('foto_perusahaan_data');
        $file_foto_npwp = $req->file('foto_npwp_data');

        $url_foto_perusahaan='';
        $url_foto_npwp='';

        if($file_foto_perusahaan){

            if(!File::isDirectory(storage_path('app/public/perusahaan'))){
                //create folder 
                File::makeDirectory(storage_path('app/public/perusahaan'));
            }
    
            $fileName = Carbon::now()->timestamp.'_'.uniqid().'.'.$file_foto_perusahaan->getClientOriginalExtension();
            $canvas = Image::canvas(300, 300);
            $resizeImage  = Image::make($file_foto_perusahaan)->resize('300', '300', function($constraint) {
                $constraint->aspectRatio();
            });
            $canvas->insert($resizeImage, 'center');
            $canvas->save(storage_path('app/public/perusahaan') . '/' . $fileName);
            $url_foto_perusahaan = url('/storage/perusahaan/'.$fileName);
        }

        if($file_foto_npwp){

            if(!File::isDirectory(storage_path('app/public/perusahaan/npwp'))){
                //create folder 
                File::makeDirectory(storage_path('app/public/perusahaan/npwp'));
            }
    
            $fileName = Carbon::now()->timestamp.'_'.uniqid().'.'.$file_foto_npwp->getClientOriginalExtension();
            $canvas = Image::canvas(500, 500);
            $resizeImage  = Image::make($file_foto_npwp)->resize('500', '500', function($constraint) {
                $constraint->aspectRatio();
            });
            $canvas->insert($resizeImage, 'center');
            $canvas->save(storage_path('app/public/perusahaan/npwp') . '/' . $fileName);
            $url_foto_npwp = url('/storage/perusahaan/npwp'.$fileName);
        }

            $input = new ProfilPerusahaan;
            $input->id_perusahaan = $req->id_perusahaan;
            $input->nama_perusahaan = $req->nama_perusahaan;
            $input->alamat_perusahaan = $req->alamat_perusahaan;
            $input->tentang_perusahaan = $req->tentang_perusahaan;
            $input->url_banner = $req->url_banner;
            $input->foto_perusahaan = $url_foto_perusahaan;
            $input->jenis_industri = $req->jenis_industri;
            $input->website_perusahaan = $req->website_perusahaan;
            $input->no_telp_perusahaan = $req->no_telp_perusahaan;
            $input->no_npwp_perusahaan = $req->no_npwp_perusahaan;
            $input->url_npwp_perusahaan = $url_foto_npwp;

            $input->save();

        $res['message'] = 'berhasil post';
        $res['data'] = $input;
        return response()->json($res, 200);
    }

    public function GetProfilPerusahaan($id)
    {
        $data = ProfilPerusahaan::where('id_perusahaan',$id)->paginate(10);
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
    public function UpdateProfilPerusahaan(Request $req, $id)
    {
        $data = ProfilPerusahaan::find($id,'id_perusahaan')->first();
        // $data->id_kandidat = $req->id_kandidat;
        $data->nama_perusahaan      = $req->nama_perusahaan;
        $data->alamat_perusahaan    = $req->alamat_perusahaan;
        $data->tentang_perusahaan   = $req->tentang_perusahaan;
        $data->url_banner           = $req->url_banner;
        $data->foto_perusahaan      = $req->foto_perusahaan;
        $data->website_perusahaan   = $req->website_perusahaan;
        $data->jenis_industri       = $req->jenis_industri;
        $data->website_perusahaan   = $req->website_perusahaan;
        $data->no_telp_perusahaan   = $req->no_telp_perusahaan;
        $data->no_npwp_perusahaan   = $req->no_npwp_perusahaan;
        $data->url_npwp_perusahaan  = $req->url_npwp_perusahaan;

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
            $res['count'] = count($data);
            $res['message'] = 'data tidak ditemukan';
            return $res;
        }
    }
    public function DeleteProfilPerusahaan($id)
    {
        # code...
    }
}

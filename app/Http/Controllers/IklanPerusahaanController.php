<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Iklan_Perusahaan;
use Carbon\Carbon;
use Image;
use File;
use DB;
class IklanPerusahaanController extends Controller
{
    public function PostIklanPerusahaan(Request $req){
        $validator = Validator::make($req->all(), [
            'id_perusahaan' => 'required',
            'posisi_pekerjaan' => 'required|string',
            'gaji_min' =>'required|integer',
            'gaji_max' =>'required|integer',
            'provinsi'=>'required|string',
            'kota'=>'required|string',
            'bidang_pekerjaan'=>'required|string',
            'tingkat_pendidikan'=>'required|string',
            'pengalaman_kerja'=>'required|string',
            'persyaratan'=>'required|string',
            'benefit_perusahaan'=>'required|string',
            'file_foto_header'=>'nullable|image:jpeg,png,jpg,gif,svg|max:2048'

        ]
    );

    if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
    }

    //upload image
    $file = $req->file('file_foto_header');
    $url='';
    if($file){

        if(!File::isDirectory(storage_path('app/public/perusahaan/header'))){
            //create folder 
            File::makeDirectory(storage_path('app/public/perusahaan/header'));
        }

        $fileName = Carbon::now()->timestamp.'_'.uniqid().'.'.$file->getClientOriginalExtension();
        $canvas = Image::canvas(250, 130);
        $resizeImage  = Image::make($file)->resize('250', '130', function($constraint) {
            $constraint->aspectRatio();
        });
        $canvas->insert($resizeImage, 'center');
        $canvas->save(storage_path('app/public/perusahaan/header') . '/' . $fileName);
        $url = url('/storage/perusahaan/header/'.$fileName);
    }

    $input = new Iklan_Perusahaan;
    $input->id_perusahaan = $req->id_perusahaan;
    $input->posisi_pekerjaan = $req->posisi_pekerjaan;
    $input->gaji_min = $req->gaji_min;
    $input->gaji_max = $req->gaji_max;
    $input->provinsi = $req->provinsi;
    $input->kota = $req->kota;
    $input->bidang_pekerjaan = $req->bidang_pekerjaan;
    $input->tingkat_pendidikan = $req->tingkat_pendidikan;
    $input->pengalaman_kerja = $req->pengalaman_kerja;
    $input->persyaratan = $req->persyaratan;
    $input->benefit_perusahaan = $req->benefit_perusahaan;
    $input->url_header = $url;

    $input->save();

    $res['message'] = 'berhasil post';
    $res['data'] = $input;
    return response()->json($res, 200);
    }
    
    public function GetIklanPerusahaanById($id){
        $data = IklanPerusahaanModel::where('id_perusahaan',$id)
        ->join('iklan_perusahaan.id_perusahaan','=','profile_perusahaan.id_perusahaan')
        ->paginate(10);
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

    public function  DeleteIklanPerusahaan($id){
        $data = IklanPerusahaanModel::find($id,'id_perusahaan')->first();
        if($data){
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
   
        public function GetIklanPerusahaanByLokasi(Request $req){
            $provinsi= $req->provinsi;
            $kota= $req->kota;
            $kota_      = Iklan_Perusahaan::where('kota',$kota)
            ->where('status_iklan','=',1)
            ->join('iklan_perusahaan.id_perusahaan','=','profile_perusahaan.id_perusahaan')
            ->paginate(10);
            $provinsi_= Iklan_Perusahaan::where('provinsi',$provinsi)
            ->where('status_iklan','=',1)
            ->join('iklan_perusahaan.id_perusahaan','=','profile_perusahaan.id_perusahaan')
            ->paginate(10);
            
            if(count($kota_)>0) {
                $res['count'] = count($kota_);
                $res['message'] = 'data ditemukan';
                $res['data'] = $kota_;
                return $res;
            }elseif(count($provinsi_)>0){
                $res['count'] = count($provinsi_);
                $res['message'] = 'data ditemukan';
                $res['data'] = $provinsi_;
                return $res;
            }else{
                $res['count'] = count($kota_);
                $res['message'] = 'data tidak ditemukan';
                return $res;
            }
        }
        public function GetIklanPerusahaanByGaji($gaji){
            $data = Iklan_Perusahaan::where('gaji_min','>=',$gaji)
            ->where('status_iklan',1)
            ->join('iklan_perusahaan.id_perusahaan','=','profile_perusahaan.id_perusahaan')
            ->paginate(10);
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
        public function GetIklanPerusahaanByBidang($bidang){
            $data = Iklan_Perusahaan::where('bidang_pekerjaan','>=',$bidang)
            ->where('status_iklan','=',1)
            ->join('iklan_perusahaan.id_perusahaan','=','profile_perusahaan.id_perusahaan')
            ->paginate(10);
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
        public function GetIklanPerusahaan($id){
            $data = Iklan_Perusahaan::where('id_perusahaan',$id)
            ->join('iklan_perusahaan.id_perusahaan','=','profile_perusahaan.id_perusahaan')
            ->paginate(10);
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
        public function CariIklanPerusahaan (Request $req)
        {
            // menangkap data pencarian
            $search             = $req->keyword;

            $data= DB::table('iklan_perusahaan')
                    ->join('profile_perusahaan',function($join) use($search){
                        $join->on('iklan_perusahaan.id_perusahaan','=','profile_perusahaan.id_perusahaan')
                                
                                ->where(function($query) use($search){
                                    $query->where('posisi_pekerjaan','like','%' .$search. '%')
                                        ->where('status_iklan','==',1)
                                        ->orwhere('bidang_pekerjaan','like','%' .$search. '%')
                                        ->orwhere('provinsi','like','%' .$search. '%')
                                        ->orwhere('kota','like','%' .$search. '%')
                                        ->orwhere('nama_perusahaan','like','%' .$search. '%');
                                });
                    })
                    ->paginate(10);            if(count($data)>0){

                $res['count'] = count($data);
                $res['message'] = 'data ditemukan';
                $res['keyword'] = $search;
                $res['data'] = $data;
                // $res['data'] = $perusahaan;

                return $res;
                
            }else{
                $res['count'] = count($data);
                $res['message'] = 'data tidak ditemukan';
                return $res;
            }
            $res['count'] = count($data);
            $res['message'] = 'data ditemukan';
            $res['data'] = $data;
            return $res;


        }

            
        public function UpdateIklanPerusahaan(Request $req , $id){

        $data = Iklan_Perusahaan::find($id,'id_perusahaan')->first();
        // $data->id_perusahaan = $req->id_perusahaan;
        $data->posisi_pekerjaan = $req->posisi_pekerjaan;
        $data->gaji_min = $req->gaji_min;
        $data->gaji_max = $req->gaji_max;
        $data->provinsi = $req->provinsi;
        $data->kota = $req->kota;
        $data->bidang_pekerjaan = $req->bidang_pekerjaan;
        $data->tingkat_pendidikan = $req->tingkat_pendidikan;
        $data->pengalaman_kerja = $req->pengalaman_kerja;
        $data->persyaratan = $req->persyaratan;
        $data->benefit_perusahaan = $req->benefit_perusahaan;
        $data->url_header = $req->url_header;
            // if(count($data)>0){
            if($data->save()){
                $res['message'] = 'Berhasil Update';
                $res['data'] = $data;
                return $res;
            }else{
                $res['message'] = 'Gagal Update';
                $res['data'] = $data;
                return $res;
            }
        // }else{
        //     $res['count'] = count($data);
        //     $res['message'] = 'data tidak ditemukan';
        //     return $res;
        // }

    }

}

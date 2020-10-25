<?php

namespace App\Http\Controllers;
use App\UndanganInterview;

use Illuminate\Http\Request;

class JadwalInterviewController extends Controller
{

    public function OrderByDate($id){

        $data = UndanganInterview::where('id_perusahaan', $id)
                    ->orderBy('tanggal_interview', 'DESC')
                    ->get();


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
    public function GetJadwalInterview($id){
        $data = UndanganInterview::where('id_kandidat',$id)
        ->join('iklan_perusahaan', 'iklan_perusahaan.id', '=', 'undangan_interview.id_iklan')
        ->join('profile_perusahaan', 'profile_perusahaan.id', '=', 'undangan_interview.id_perusahaan')
        ->where('status','diterima')
        // ->orderBy(id)
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
    public function GetJadwalPerusahaan($id){
        $data = UndanganInterview::where('id_perusahaan',$id)
        ->join('data_pribadi', 'data_pribadi.id', '=', 'undangan_interview.id_kandidat')
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
    //Route::get('jadwal-perusahaan/{id}',GetJadwalController@GetJadwalPerusahaan);
    

}

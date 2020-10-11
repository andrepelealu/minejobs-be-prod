<?php

namespace App\Http\Controllers;
use App\Provinsi;

use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function GetAllProvinsi(){
        $data = Provinsi::all();
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

    public function GetKotaByProvinsiId($id){
        $data = Provinsi::
        join('kota', 'kota.province_id', '=', 'provinsi.id')
        ->where('provinsi.id','=',$id)
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

}

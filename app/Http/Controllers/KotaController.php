<?php

namespace App\Http\Controllers;
use App\Kota;

use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function GetAllKota(){
        $data = Kota::paginate(10);
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
        $data = Kota::
        join('provinsi', 'provinsi.id', '=', 'kota.province_id')
        ->where('kota.province_id','=',$id)
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

    public function GetKotaById($id){
        $data = Kota::where('id',$id)
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

}

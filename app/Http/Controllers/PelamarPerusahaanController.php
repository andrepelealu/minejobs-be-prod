<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelamar_Perusahaan;
use App\UserKandidat;
use Illuminate\Mail\Message;
use Mail,DB;
use Illuminate\Support\Facades\Validator;

class PelamarPerusahaanController extends Controller
{
    public function PostPelamarPerusahaan(Request $req){
        $validator = Validator::make($req->all(), [
            'id_kandidat' => 'required|',
            'id_iklan' => 'required|string',
            'id_perusahaan' => 'required|string',
            'tanggal_lamaran' =>'required',
            
        ]
    );
    if($validator->fails()){
        return response()->json($validator->errors()->toJson(), 400);
    }
    $input = new Pelamar_Perusahaan;
    $input->id_kandidat = $req->id_kandidat;
    $input->id_iklan = $req->id_iklan;
    $input->tanggal_lamaran = Carbon::parse($req->tanggal_lamaran);
    $input->id_perusahaan = $req->id_perusahaan;
    // Table::select('name','surname')->where('id', 1)->get();

    $input->save();
    $res['message'] = 'berhasil post';
    $res['data'] = $input;
    return response()->json($res, 200);
    }
    public function GetPelamarPerusahaanById($id){
        $data = Pelamar_Perusahaan::where('id_perusahaan',$id)->paginate(10);
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
    public function GetPelamarPerusahaan(){
        $data = Pelamar_Perusahaan::all()->paginate(10);
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
    public function UpdateStatusPelamar(Request $req , $id){

        $check = Pelamar_Perusahaan::find($id,'id');
        // $data->id_perusahaan = $req->id_perusahaan;
        // $data->id_iklan = $req->id_iklan;
        // $data->tanggal_lamaran = $req->tanggal_lamaran;            
        if($check){
            $data = Pelamar_Perusahaan::find($id,'id')->first();
            $data->status_lamaran = $req->status_lamaran;
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
    public function DeletePelamarPerusahaan($id){
        $check = Pelamar_Perusahaan::find($id,'id');
        if($check){
            $data = Pelamar_Perusahaan::find($id,'id')->first();
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
        
            $res['message'] = 'data tidak ditemukan';
            return $res;
        }       
    } //
//
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengalaman extends Model
{
    use SoftDeletes;
    protected $table = 'pengalaman';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [
        'id_kandidat',
        'posisi_pekerjaan',
        'nama_perusahaan',
        'tahun_mulai',
        'tahun_selesai',
        'jabatan',
        'gaji',
        'deskripsi_pekerjaan'   
    ];
}

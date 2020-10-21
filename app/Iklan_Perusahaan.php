<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Iklan_Perusahaan extends Model
{
    use SoftDeletes;
    protected $table = 'iklan_perusahaan';
    public $timestamps = true;
    protected $fillable = [

                'id_perusahaan',
                'posisi_pekerjaan',
                'gaji_min',
                'gaji_max',
                'provinsi',
                'kota',
                'bidang_pekerjaan',
                'tingkat_pendidikan',
                'pengalaman_kerja',
                'persyaratan',
                'benefit_perusahaan',
                'url_header',
                'status_iklan'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfilPerusahaan extends Model
{
    use SoftDeletes;
    protected $table = 'profile_perusahaan';
    public $timestamps = true;
    protected $fillable = [
    'id_perusahaan',
    'nama_perusahaan',
    'alamat_perusahaan',
    'tentang_perusahaan',
    'url_banner',
    'foto_perusahaan',
    'website_perusahaan',
    'jenis_industri',
    'no_telp_perusahaan',
    'no_npwp_perusahaan',
    'url_npwp_perusahaan'
    ];
//
}

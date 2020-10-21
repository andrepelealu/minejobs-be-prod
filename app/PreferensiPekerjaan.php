<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PreferensiPekerjaan extends Model
{
    use SoftDeletes;
    protected $table = 'preferensi_pekerjaan';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [
        'id_kandidat',
        'gaji_diharapkan',
        'provinsi',
        'kota',
        'bidang_pekerjaan' 
    ];
}

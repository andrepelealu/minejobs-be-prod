<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PicPerusahaan extends Model
{
    use SoftDeletes;
    protected $table = 'pic_perusahaan';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [
        'id_perusahaan',
        'nama_pic',
        'no_telp_pic',
        'url_ktp_pic'   
    ];
}

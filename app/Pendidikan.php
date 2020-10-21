<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendidikan extends Model
{
    use SoftDeletes;
    protected $table = 'pendidikan';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [
        'id_kandidat',
        'jurusan',
        'tahun_mulai',
        'tahun_selesai',
        'nama_instansi' 
];
}

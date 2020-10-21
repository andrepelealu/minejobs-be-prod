<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AturUlang extends Model
{
    use SoftDeletes;
    protected $table = 'atur_ulang_interview';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [
    'id_undangan_interview',
    'id_kandidat',
    'id_perusahaan'
];
}

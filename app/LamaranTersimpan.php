<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LamaranTersimpan extends Model
{
    use SoftDeletes;
    protected $table = 'lamaran_tersimpan';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [
        'id_kandidat',
        'id_iklan',
        'id_kandidat'
    ];
}

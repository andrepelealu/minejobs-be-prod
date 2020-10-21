<?php

namespace App;
use App\Keahlian;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Keahlian extends Model
{
    use SoftDeletes;
    protected $table = 'keahlian';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [
        'id_kandidat',
        'nama_keahlian',
        'tingkatan'
    ];
}

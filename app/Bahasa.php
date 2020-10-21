<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bahasa extends Model
{
    use SoftDeletes;
    protected $table = 'bahasa';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [            
    'id_kandidat',
    'bahasa_dikuasai',
    'kemampuan_verbal',
    'kemampuan_tulisan'
];
}

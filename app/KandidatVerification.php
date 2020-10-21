<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KandidatVerification extends Model
{
    use SoftDeletes;
    protected $table = 'user_kandidat_verification';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [            
    'email',
    'token'
];
}

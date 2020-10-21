<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AddAdmin extends Model
{
    use SoftDeletes;
    protected $table = 'user_admin_verification';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [            
    'email',
    'token'
];
}

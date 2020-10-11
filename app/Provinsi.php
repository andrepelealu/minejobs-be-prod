<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    //
    protected $table = 'provinsi';

    protected $casts = [
        'meta' => 'array',
    ];

    public $timestamps = false;

    public function cities()
    {
        return $this->hasMany('App\Kota', 'province_id');
    }
}

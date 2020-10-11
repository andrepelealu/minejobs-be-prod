<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = 'kota';

    protected $casts = [
        'meta' => 'array',
    ];

    public $timestamps = false;

    public function province()
    {
        return $this->belongsTo('App\Provinsi', 'province_id');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JadwalInterview extends Model
{
    use SoftDeletes;
    protected $table = 'jadwal_interview';
    public $timestamps = true;

    protected $fillable = [
    'id_undangan_interview',
    'id_kandidat',
    'id_perusahaan'
    ];
}

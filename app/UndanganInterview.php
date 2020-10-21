<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UndanganInterview extends Model
{
    use SoftDeletes;
    protected $table = 'undangan_interview';
    public $timestamps = true;
    protected $fillable = [
    'id_kandidat',
    'id_perusahaan',
    'id_iklan',
    'pesan',
    'tanggal_interview',
    'waktu_mulai',
    'waktu_selesai',
    'metode_interview',
    'lokasi_wawancara',
    'status'];
}

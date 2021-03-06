<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class LamaranTerkirim extends Model
{
    use SoftDeletes;
    protected $table = 'lamaran_terkirim';
    public $timestamps = true;
    //data yang bisa di isi
    protected $fillable = [
    'id_kandidat',
    'nama_depan',
    'nama_belakang',
    'nomor_telepon',
    'provinsi',
    'kota',
    'tentang',
    'foto_profile'];
}

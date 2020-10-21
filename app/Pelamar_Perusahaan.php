<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pelamar_Perusahaan extends Model
{
   use SoftDeletes;
   protected $table = 'pelamar_perusahaan';
   public $timestamps = true;
   protected $fillable = [

   'id_kandidat',
   'id_iklan',
   'id_perusahaan',
   'tanggal_lamaran'
   ];
}

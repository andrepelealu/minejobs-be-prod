<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPribadiModel extends Model
{
    use SoftDeletes;
    protected $table = 'data_pribadi';
    public $timestamps = true;
    protected $fillable = [
    'id_kandidat',
    'nama_depan',
    'nama_belakang',
    'nomor_telepon',
    'provinsi',
    'kota',
    'tentang',
    'foto_profile'];
    
    // protected $primaryKey = 'id_data_pribadi';

    
}

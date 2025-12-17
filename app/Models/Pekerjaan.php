<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pekerjaan extends Model
{    
    protected $table = 'rizen_535196_pekerjaan';
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'deskripsi'
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'pekerjaan_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'pekerjaan';

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pegawai extends Model
{
    protected $table = 'rizen_535196_pegawai';
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'email',
        'pekerjaan_id',
        'gender',
        'is_active'
    ];

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class, 'pekerjaan_id');
    }
}

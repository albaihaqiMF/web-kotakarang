<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function masterKelurahan()
    {
        return $this->belongsTo(Master::class, 'kelurahan', 'code');
    }

    public function masterKecamatan()
    {
        return $this->hasOne(Master::class, 'code', 'kecamatan');
    }

    public function masterKabupaten()
    {
        return $this->hasOne(Master::class, 'code', 'kabupaten');
    }

    public function masterProvinsi()
    {
        return $this->hasOne(Master::class, 'code', 'provinsi');
    }
}

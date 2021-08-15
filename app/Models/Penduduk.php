<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gender()
    {
         return $this->hasOne(Master::class, 'code', 'jenis_kelamin');
    }
    public function pekerjaan()
    {
         return $this->hasOne(Master::class, 'code', 'jenis_pekerjaan');
    }
}

<?php

namespace App\Models\SK;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;
    protected $fillable = ['nama','alamat','no_hp','sk_rt','foto_kk','sk_pbb'];
}

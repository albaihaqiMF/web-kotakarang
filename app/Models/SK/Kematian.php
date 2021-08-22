<?php

namespace App\Models\SK;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat', 'no_hp', 'sk_rt', 'sk_rs', 'sk_pbb'];
}

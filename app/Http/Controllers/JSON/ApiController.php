<?php

namespace App\Http\Controllers\JSON;

use App\Http\Controllers\Controller;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function gender()
    {
        $data = [
            'lelaki' => Penduduk::where('jenis_kelamin', '2233001')->count(),
            'perempuan' => Penduduk::where('jenis_kelamin', '2233002')->count(),
        ];

        return $data;
    }
}

<?php

namespace App\Http\Controllers\JSON;

use App\Http\Controllers\Controller;
use App\Models\Keluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $baseURL = 'http://localhost:8000/v1/api/';
        $data[0] = [
            'title' => 'Gender',
            'link' => $baseURL . 'gender',

        ];
        $data[1] = [
            'title' => 'Penduduk',
            'link' => $baseURL . 'penduduk',
        ];
        $data[2] = [
            'title' => 'Kartu Keluarga',
            'link' => $baseURL . 'keluarga',
        ];

        return $data;
    }
    public function gender()
    {
        $data = [
            'lelaki' => Penduduk::where('jenis_kelamin', '2233001')->count(),
            'perempuan' => Penduduk::where('jenis_kelamin', '2233002')->count(),
        ];

        return $data;
    }
    public function penduduk()
    {
        $data = [
            'count' => Penduduk::count(),
            'data' => Penduduk::get(),
        ];
        return $data;
    }

    public function keluarga()
    {
         $data = [
             'count' => Keluarga::count(),
             'data' => Keluarga::get()
         ];

         return $data;
    }
}

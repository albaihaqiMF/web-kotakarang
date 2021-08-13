<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keluarga;
use App\Models\Penduduk;
use Illuminate\Http\Request;

class RouteAdminController extends Controller
{
    public function dashboard()
    {
        $data = ([
            'keluarga' => Keluarga::count(),
            'rt' => 11,
            'penduduk' => Penduduk::count(),
        ]);
        return view('admin.index', compact('data'));
    }
    public function dataPenduduk()
    {
        return view('admin.data-penduduk');
    }
    public function dataKeluarga()
    {
        $data = Keluarga::get();
        return view('admin.data-keluarga', compact('data'));
    }
    public function map()
    {
        return view('admin.map');
    }
}

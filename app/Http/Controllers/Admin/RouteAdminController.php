<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Keluarga;
use App\Models\Penduduk;
use App\Models\Pengumuman;
use Illuminate\Http\Request;

class RouteAdminController extends Controller
{
    public function dashboard()
    {
        $data = [
            'keluarga' => Keluarga::count(),
            'rt' => 11,
            'penduduk' => Penduduk::count(),
        ];
        return view('admin.index', compact('data'));
    }
    public function dataPenduduk()
    {
        $data = Penduduk::get();
        return view('admin.data-penduduk',compact('data'));
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
    public function pengumuman()
    {
         $data = Pengumuman::orderBy('updated_at','desc')->get();

         return view('admin.pengumuman.index',compact('data'));
    }
    public function event()
    {
         $data = Event::orderBy('jadwal','desc')->get();

         return view('admin.event.index',compact('data'));
    }
}

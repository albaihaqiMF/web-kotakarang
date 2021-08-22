<?php

namespace App\Http\Controllers;

use App\Models\PembuatanKTP;
use App\Models\SK\Kelahiran;
use App\Models\SK\Kematian;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function daftar_ktp()
    {
        $data = PembuatanKTP::get();

        return view('admin.service.daftar-ktp', compact('data'));
    }

    public function sk_kelahiran()
    {
        $data = Kelahiran::get();

        return view('admin.service.sk-kelahiran', compact('data'));
    }

    public function kelahiranShow(Kelahiran $kelahiran)
    {
         return view('admin.service.show.kelahiran', compact('kelahiran'));
    }

    public function sk_kematian()
    {
         $data = Kematian::get();
         return view('admin.service.sk-kematian', compact('data'));
    }
}

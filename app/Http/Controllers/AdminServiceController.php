<?php

namespace App\Http\Controllers;

use App\Models\PembuatanKk;
use App\Models\PembuatanKTP;
use App\Models\SK\Kelahiran;
use App\Models\SK\Kematian;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
    public function daftar_ktp()
    {
        $data = PembuatanKTP::where('deleted_at', null)->get();

        return view('admin.service.daftar-ktp', compact('data'));
    }

    public function verify_ktp($id)
    {
        PembuatanKTP::where('id', $id)->update([
            'status' => 1,
        ]);

        $data = PembuatanKTP::where('id', $id)->first();

        session()->flash('option', 'Berhasil memverifikasi data ' . $data->nama);

        return back();
    }

    public function delete_ktp($id)
    {
        PembuatanKTP::where('id', $id)->update([
            'deleted_at' => now(),
        ]);

        $data = PembuatanKTP::where('id', $id)->first();

        session()->flash('option', 'Berhasil menghapus data ' . $data->nama);

        return back();
    }

    public function sk_kelahiran()
    {
        $data = Kelahiran::get();

        return view('admin.service.kelahiran.index', compact('data'));
    }

    public function kelahiranShow(Kelahiran $kelahiran)
    {
        return view('admin.service.kelahiran.show', compact('kelahiran'));
    }

    public function sk_kematian()
    {
        $data = Kematian::get();
        return view('admin.service.kematian.index', compact('data'));
    }

    public function kematianShow(Kematian $kematian)
    {
        $data = $kematian;
        return view('admin.service.kematian.show', compact('data'));
    }
}

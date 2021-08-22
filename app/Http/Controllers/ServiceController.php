<?php

namespace App\Http\Controllers;

use App\Models\PembuatanKk;
use App\Models\PembuatanKTP;
use App\Models\SK\Kelahiran;
use App\Models\SK\Kematian;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function fileStore($name, $path)
    {
        $fileName = time() . '-' . $path . '.' . $name->extension();
        $name->storeAs('public', $fileName);

        return $fileName;
    }
    // ------ KTP ------ //
    public function create_ktp()
    {
        return view('services.ktp');
    }
    public function store_ktp()
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|numeric',
        ]);
        PembuatanKTP::create([
            'nama' => strtoupper(request('nama')),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
        ]);

        session()->flash('success', 'Berhasil mendaftarkan Data');
        return back();
    }

    // ------ SK Kelahiran ------ //
    public function create_skKelahiran()
    {
        return view('services.sk-kelahiran');
    }

    public function store_skKelahiran()
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'numeric'
        ]);

        $sk_rt = $this->fileStore(request()->file('sk_rt'), 'sk_rt');
        $foto_kk = $this->fileStore(request()->file('foto_kk'),'foto_kk');
        $sk_pbb = $this->fileStore(request()->file('sk_pbb'),'sk_pbb');

        Kelahiran::create([
            'nama' => strtoupper(request('nama')),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
            'sk_rt' => $sk_rt,
            'foto_kk' => $foto_kk,
            'sk_pbb' => $sk_pbb,
        ]);

        session()->flash('success','Data Berhasil Terdaftarkan');
        return back();
    }

    // --- SK Kematian --- //
    public function create_skKematian()
    {
         return view('services.sk-kematian');
    }

    public function store_skKematian()
    {
        request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'numeric'
        ]);

        $sk_rt = $this->fileStore(request()->file('sk_rt'), 'sk_rt');
        $sk_rs = $this->fileStore(request()->file('sk_rs'),'sk_rs');
        $sk_pbb = $this->fileStore(request()->file('sk_pbb'),'sk_pbb');

        Kematian::create([
            'nama' => strtoupper(request('nama')),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
            'sk_rt' => $sk_rt,
            'sk_rs' => $sk_rs,
            'sk_pbb' => $sk_pbb,
        ]);

        session()->flash('success','Data Berhasil Terdaftarkan');
        return back();
    }

    // --- SEARCH CONTROLLER --- //
    public function search(Request $r)
    {
        $data = null;
        $type = $r->service;
        $query = $r->q;
        switch ($type) {
            case '1':
                $data = PembuatanKTP::where('nama', 'like', '%' . strtoupper($query) . '%')
                    ->orWhere('no_hp', $query)->get();
                break;
            case '2':
                $data = Kelahiran::where('nama', 'like', '%' . strtoupper($query) . '%')
                    ->orWhere('no_hp', $query)->get();
                break;
            case '3':
                $data = Kematian::where('nama', 'like', '%' . strtoupper($query) . '%')
                    ->orWhere('no_hp', $query)->get();
                break;
            case '4':
                $data = PembuatanKk::where('nama', 'like', '%' . strtoupper($query) . '%')
                    ->orWhere('no_hp', $query)->get();
                break;
            default:
                $data = null;
                break;
        }

        session()->flash('search', $data);

        return back();
    }
}

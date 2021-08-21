<?php

namespace App\Http\Controllers;

use App\Models\PembuatanKk;
use App\Models\PembuatanKTP;
use App\Models\SK\Kelahiran;
use App\Models\SK\Kematian;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function create_ktp()
    {
        return view('services.ktp');
    }
    public function store_ktp()
    {
         request()->validate([
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required|numeric',
         ]);
         PembuatanKTP::create([
             'nama'=>strtoupper(request('nama')),
             'alamat'=>request('alamat'),
             'no_hp'=>request('no_hp'),
         ]);

         session()->flash('success','Berhasil mendaftarkan Data');
         return back();
    }

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

        session()->flash('search',$data);

        return back();
    }
}

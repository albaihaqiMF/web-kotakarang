<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keluarga;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:2');
    }

    //Data Keluarga (KK)
    public function createKeluarga()
    {
        return view('admin.create-keluarga');
    }

    public function storeKeluarga(Request $request)
    {
        $data = $request->all();

        Keluarga::create([
            'no_kk'=>$data['no_kk'],
            'kepala_keluarga'=>$data['kepala_keluarga'],
            'alamat'=>$data['alamat'],
            'rt'=>$data['rt'],
            'rw'=>$data['rw'],
            'kelurahan'=>$data['kelurahan'],
            'kecamatan'=>$data['kecamatan'],
            'kabupaten'=>$data['kabupaten'],
            'provinsi'=>$data['provinsi'],
            'kode_pos'=>$data['kode_pos'],
        ]);

        return redirect(route('admin.keluarga.create'));
    }


    //Data Penduduk (Warga)
    public function createPenduduk()
    {
         return view('admin.create-penduduk');
    }
}

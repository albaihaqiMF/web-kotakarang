<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Keluarga;
use App\Models\Master;
use App\Models\Penduduk;
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
            'no_kk' => $data['no_kk'],
            'kepala_keluarga' => $data['kepala_keluarga'],
            'alamat' => $data['alamat'],
            'rt' => $data['rt'],
            'rw' => $data['rw'],
            'kelurahan' => $data['kelurahan'],
            'kecamatan' => $data['kecamatan'],
            'kabupaten' => $data['kabupaten'],
            'provinsi' => $data['provinsi'],
            'kode_pos' => $data['kode_pos'],
        ]);

        return redirect(route('admin.keluarga.create'));
    }


    //Data Penduduk (Warga)
    public function createPenduduk()
    {
        $gender = Master::where('type', '2233')->get();
        $agama = Master::where('type', '1111')->get();
        $pendidikan = Master::where('type', '1288')->get();
        $pekerjaan = Master::where('type', '8888')->get();
        $status = Master::where('type', '5252')->get();
        $negara = Master::where('type', '1705')->get();

        return view('admin.create-penduduk', [
            'gender' => $gender,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'status' => $status,
            'negara' => $negara,

        ]);
    }

    public function storePenduduk(Request $request)
    {
        $request->validate([
            'nik'=>'unique:penduduks|numeric',

        ]);
        Penduduk::create([
            'nama' =>  $request['nama'],
            'nik' =>  $request['nik'],
            'no_kk' =>  $request['no_kk'],
            'jenis_kelamin' =>  $request['jenis_kelamin'],
            'tempat_lahir' =>  $request['tempat_lahir'],
            'tanggal_lahir' =>  $request['tanggal_lahir'],
            'agama' =>  $request['agama'],
            'pendidikan' =>  $request['pendidikan'],
            'jenis_pekerjaan' =>  $request['jenis_pekerjaan'],
            'status_pernikahan' =>  $request['status_pernikahan'],
            'kewarganegaraan' =>  $request['kewarganegaraan'],
            'no_paspor' =>  $request['no_paspor'],
            'no_kitas' =>  $request['no_kitas'],
            'nama_ayah' =>  $request['nama_ayah'],
            'nama_ibu' =>  $request['nama_ibu'],
        ]);

        return redirect(route('admin.data-penduduk'));
    }
}

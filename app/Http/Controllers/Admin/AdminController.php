<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Keluarga;
use App\Models\Master;
use App\Models\Penduduk;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $this->validate($request, [
            'no_kk' => 'required|numeric|unique:keluargas',
            'rw' => 'numeric|required',
            'rt' => 'numeric|required',
            'kode_pos' => 'numeric|required'
        ]);
        $attr = $request->all();
        $attr['kepala_keluarga'] = strtoupper($request->kepala_keluarga);

        Keluarga::create($attr);

        session()->flash('success','Data Keluarga dengan Nomor KK. '.$attr['no_kk'].' berhasil ditambahkan');

        return redirect(route('admin.data-keluarga'));
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
            'nik' => 'numeric|unique:penduduks',
            'no_kk' => 'numeric',
        ]);
        Penduduk::create([
            'nama' =>  Str::upper($request['nama']),
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

        session()->flash('success', 'Data ' . $request['nama'] . ' dengan NIK. ' . $request['nik'] . ' berhasil ditambah');

        return redirect(route('admin.data-penduduk'));
    }
    public function fileStore($file, $name)
    {

        $fileName = $name . '-' . time() . '.' . $file->extension();
        $file->storeAs('public', $fileName);

        return $fileName;
    }

    // Pengumuman Action
    public function createPengumuman()
    {
        return view('admin.pengumuman.create');
    }
    public function storePengumuman(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'desc' => 'required',
        ]);
        $attr = $request->all();
        $attr['title'] = ucwords(strtolower($request->title));
        $attr['slug'] = Str::slug($request->title) . '-' . Str::random(4) . '-' . date('d-m-Y', strtotime(now()));
        if ($request->gambar !== null) {
            $attr['gambar'] = $this->fileStore($request->file('gambar'), 'pengumuman');
        }

        Pengumuman::create($attr);

        session()->flash('success', 'Berhasil menambahkan pengumuman ' . $attr['title']);

        return redirect(route('admin.pengumuman'));
    }
    public function editPengumuman(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit', [
            'data' => $pengumuman
        ]);
    }
    public function updatePengumuman(Request $request, Pengumuman $pengumuman)
    {
        $attr = $this->validate($request, [
            'title' => 'required',
            'desc' => 'required'
        ]);

        $attr['title'] = ucwords(strtolower($request->title));
        $request->gambar !== null && $attr['gambar'] = $this->fileStore($request->file('gambar'), 'pengumuman');
        $pengumuman->update($attr);
        session()->flash('success', 'Data ' . $request->title . ' berhasil diperbarui');
        return redirect(route('admin.pengumuman'));
    }


    //Event Action
    public function createEvent()
    {
        return view('admin.event.create');
    }
    public function storeEvent(Request $request)
    {
        $attr = $this->validate($request, [
            'title' => 'required',
            'jadwal' => 'required|date',
            'desc' => 'required',
        ]);
        $attr['title'] = ucwords(strtolower($request->title));
        $attr['slug'] = Str::slug($request->title) . '-' . Str::random(4) . '-' . date('d-m-Y', strtotime(now()));

        Event::create($attr);

        session()->flash('success', 'Berhasil menambahkan acara ' . $attr['title']);

        return redirect(route('admin.event'));
    }
    public function editEvent(Event $event)
    {
        return view('admin.event.edit', ['data' => $event]);
    }
    public function updateEvent(Request $request, Event $event)
    {
        $attr = $this->validate($request, [
            'title' => 'required',
            'jadwal' => 'required|date',
            'desc' => 'required'
        ]);
        $attr['title'] = ucwords(strtolower($request->title));

        $event->update($attr);

        session()->flash('success', 'Berhasil memperbarui data acara ' . $attr['title']);
        return redirect(route('admin.event'));
    }
}

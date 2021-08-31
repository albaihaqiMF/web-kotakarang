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
        $request->validate([
            'no_kk' => 'unique:penduduks|numeric',
        ]);
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
            'nik' => 'unique:penduduks|numeric',
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
    public function fileStore($name, $path)
    {
        // $date = date('Y-m-d_H.i.s', strtotime(now()));
        // $fileName = strtoupper($path) . '-' . $date . '-' . Str::random(4) . '-' . Str::random(4) . '-' . Str::random(3) .  '.' . $name->extension();
        $fileName = $name->store('public');

        return $fileName;
    }

    // Pengumuman Action
    public function createPengumuman()
    {
        return view('admin.pengumuman.create');
    }
    public function storePengumuman(Request $r)
    {
        $this->validate($r, [
            'title' => 'required',
            'desc' => 'required',
        ]);
        $attr = $r->all();
        $attr['title'] = ucwords(strtolower($r->title));
        $attr['slug'] = Str::slug($r->title) . '-' . Str::random(4).'-'.date('d-m-Y',strtotime(now()));
        if ($r->gambar !== null) {
            $attr['gambar'] = $this->fileStore($r->gambar, 'pengumuman');
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
        $request->gambar !== null && $attr['gambar'] = $this->fileStore($request->gambar, 'pengumuman');
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
        $attr['slug'] = Str::slug($request->title) . '-' . Str::random(4).'-'.date('d-m-Y',strtotime(now()));

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

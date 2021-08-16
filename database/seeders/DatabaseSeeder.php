<?php

namespace Database\Seeders;

use App\Models\Keluarga;
use App\Models\Master;
use App\Models\Penduduk;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Super Admin',
            'role' => 2,
            'email' => 'admin@kotakarang',
            'password' => Hash::make('bismillahsukses')
        ]);
        User::create([
            'name' => 'Mahasiswa KKN',
            'role' => 1,
            'email' => 'kkn@unila',
            'password' => Hash::make('bismillahkkn')
        ]);
        Keluarga::create([
            'no_kk' => '1871180609130005',
            'no_surat' => '18710370881',
            'kepala_keluarga' => 'ATHORID',
            'alamat' => 'JL. KETAPANG LK001',
            'rt' => '015',
            'kelurahan' => '1122003',
            'kecamatan' => '1123003',
            'kabupaten' => '1124001',
            'provinsi' => '1125001',
            'kode_pos' => '35128',
            'tanggal_keluar' => '06-09-2013'
        ]);
        $master = [
            //Kelurahan 1122
            [
                'type' => '1122',
                'description' => 'kelurahan',
                'code' => '1122001',
                'title' => 'Kota Karang',
            ],
            [
                'type' => '1122',
                'description' => 'kelurahan',
                'code' => '1122002',
                'title' => 'Kota Karang Raya',
            ],
            [
                'type' => '1122',
                'description' => 'kecamatan',
                'code' => '1122003',
                'title' => 'Tanjung Raya',
            ],

            //Kecamatan 1123
            [
                'type' => '1123',
                'description' => 'kecamatan',
                'code' => '1123001',
                'title' => 'Telukbetung Timur',
            ],
            [
                'type' => '1123',
                'description' => 'kecamatan',
                'code' => '1123002',
                'title' => 'Telukbetung Barat',
            ],
            [
                'type' => '1123',
                'description' => 'kecamatan',
                'code' => '1123003',
                'title' => 'Kedamaian',
            ],

            //Kabupaten 1124
            [
                'type' => '1124',
                'description' => 'kabupaten',
                'code' => '1124001',
                'title' => 'Kota Bandar Lampung',
            ],

            //Provinsi 1125
            [
                'type' => '1125',
                'description' => 'provinsi',
                'code' => '1125001',
                'title' => 'Lampung',
            ],

            //Jenis Kelamin 2233
            [
                'type' => '2233',
                'description' => 'gender',
                'code' => '2233001',
                'title' => 'Laki-laki',
            ],
            [
                'type' => '2233',
                'description' => 'gender',
                'code' => '2233002',
                'title' => 'Perempuan',
            ],

            //Agama 1111
            [
                'type'=>'1111',
                'description'=>'agama',
                'code'=>'1111001',
                'title'=>'Islam',
            ],
            [
                'type'=>'1111',
                'description'=>'agama',
                'code'=>'1111002',
                'title'=>'Kristen',
            ],
            [
                'type'=>'1111',
                'description'=>'agama',
                'code'=>'1111003',
                'title'=>'Katolik',
            ],
            [
                'type'=>'1111',
                'description'=>'agama',
                'code'=>'1111004',
                'title'=>'Budha',
            ],
            [
                'type'=>'1111',
                'description'=>'agama',
                'code'=>'1111005',
                'title'=>'Hindu',
            ],
            [
                'type'=>'1111',
                'description'=>'agama',
                'code'=>'1111999',
                'title'=>'Lainnya',
            ],


            //Pendidikan 1288
            [
                'type'=>'1288',
                'description'=>'pendidikan',
                'code'=>'1288001',
                'title'=>'SD',
            ],
            [
                'type'=>'1288',
                'description'=>'pendidikan',
                'code'=>'1288002',
                'title'=>'SMP/MTs sederajat',
            ],
            [
                'type'=>'1288',
                'description'=>'pendidikan',
                'code'=>'1288003',
                'title'=>'SMA/MA sederajat',
            ],
            [
                'type'=>'1288',
                'description'=>'pendidikan',
                'code'=>'1288004',
                'title'=>'Vokasi/D3/D4 sederajat',
            ],
            [
                'type'=>'1288',
                'description'=>'pendidikan',
                'code'=>'1288005',
                'title'=>'S1',
            ],
            [
                'type'=>'1288',
                'description'=>'pendidikan',
                'code'=>'1288006',
                'title'=>'S2',
            ],
            [
                'type'=>'1288',
                'description'=>'pendidikan',
                'code'=>'1288007',
                'title'=>'S3',
            ],
            [
                'type'=>'1288',
                'description'=>'pendidikan',
                'code'=>'1288999',
                'title'=>'Lainnya',
            ],

            //Pekerjaan 8888
            [
                'type'=>'8888',
                'description'=>'pekerjaan',
                'code'=>'8888001',
                'title'=>'Pedagang',
            ],
            [
                'type'=>'8888',
                'description'=>'pekerjaan',
                'code'=>'8888002',
                'title'=>'Swasta/Wirausaha',
            ],
            [
                'type'=>'8888',
                'description'=>'pekerjaan',
                'code'=>'8888003',
                'title'=>'PNS',
            ],
            [
                'type'=>'8888',
                'description'=>'pekerjaan',
                'code'=>'8888004',
                'title'=>'Pedagang',
            ],
            [
                'type'=>'8888',
                'description'=>'pekerjaan',
                'code'=>'8888005',
                'title'=>'Siswa/Mahasiswa',
            ],
            [
                'type'=>'8888',
                'description'=>'pekerjaan',
                'code'=>'8888999',
                'title'=>'Lainnya',
            ],

            //Status Pernikahan 5252
            [
                'type'=>'5252',
                'description'=>'Status Pernikahan',
                'code'=>'5252001',
                'title'=>'Kawin',
            ],
            [
                'type'=>'5252',
                'description'=>'Status Pernikahan',
                'code'=>'5252002',
                'title'=>'Belum Kawin',
            ],

            //Kewarganegaraan 1705
            [
                'type'=>'1705',
                'description'=>'Kewarganegaraan',
                'code'=>'1705001',
                'title'=>'WNI',
            ],
            [
                'type'=>'1705',
                'description'=>'Kewarganegaraan',
                'code'=>'1705002',
                'title'=>'WNA',
            ],


        ];
        foreach ($master as $data) {
            Master::insert($data);
        }
        Penduduk::create([
            'nama' => 'Muhammad Fahmi Albaihaqi',
            'nik' => '1871052410990003',
            'jenis_kelamin' => '2233001',
            'tempat_lahir' => 'Gresik',
            'tanggal_lahir' => '24/10/1999',
            'agama' => '1111001',
            'pendidikan' => '1288003',
            'jenis_pekerjaan' => '8888005',
            'status_pernikahan' => '5252002',
            'kewarganegaraan' => 'WNI',
            'nama_ayah'=>'Athorid',
            'nama_ibu'=>'Zahrotul Ummah'
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Keluarga;
use App\Models\Master;
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
            //Kelurahan
            [
                'type'=>'1122',
                'description'=>'kelurahan',
                'code'=>'1122001',
                'title'=>'Kota Karang',
            ],
            [
                'type'=>'1122',
                'description'=>'kelurahan',
                'code'=>'1122002',
                'title'=>'Kota Karang Raya',
            ],
            [
                'type'=>'1122',
                'description'=>'kecamatan',
                'code'=>'1122003',
                'title'=>'Tanjung Raya',
            ],

            //Kecamatan
            [
                'type'=>'1123',
                'description'=>'kecamatan',
                'code'=>'1123001',
                'title'=>'Telukbetung Timur',
            ],
            [
                'type'=>'1123',
                'description'=>'kecamatan',
                'code'=>'1123002',
                'title'=>'Telukbetung Barat',
            ],
            [
                'type'=>'1123',
                'description'=>'kecamatan',
                'code'=>'1123003',
                'title'=>'Kedamaian',
            ],

            //Kabupaten
            [
                'type'=>'1124',
                'description'=>'kabupaten',
                'code'=>'1124001',
                'title'=>'Kota Bandar Lampung',
            ],

            //Provinsi
            [
                'type'=>'1125',
                'description'=>'provinsi',
                'code'=>'1125001',
                'title'=>'Lampung',
            ],
        ];
        foreach ($master as $data) {
            Master::insert($data);
        }
    }
}

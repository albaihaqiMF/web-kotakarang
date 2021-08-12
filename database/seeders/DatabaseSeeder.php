<?php

namespace Database\Seeders;

use App\Models\Keluarga;
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
            'kelurahan' => 'TANJUNG RAYA',
            'kecamatan' => 'KEDAMAIAN',
            'kabupaten' => 'KOTA BANDAR LAMPUNG',
            'provinsi' => 'LAMPUNG',
            'kode_pos' => '35128',
            'tanggal_keluar' => '06-09-2013'
        ]);
    }
}

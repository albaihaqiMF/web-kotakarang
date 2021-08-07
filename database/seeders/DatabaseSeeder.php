<?php

namespace Database\Seeders;

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
    }
}

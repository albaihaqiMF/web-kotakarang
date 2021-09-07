<?php

namespace Database\Factories;

use App\Models\Keluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

class KeluargaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Keluarga::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $rt = ['001','002','003','004','005','006','007','008','009','010','011'];
        return [
            'no_kk' => rand(1871000000000001,1881000000000001),
            'no_surat' => $this->faker->randomNumber(5),
            'kepala_keluarga' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'rt' => $this->faker->randomElement($rt),
            'rw' => $this->faker->randomElement(['001','002']),
            'kelurahan' => '1122003',
            'kecamatan' => '1123003',
            'kabupaten' => '1124001',
            'provinsi' => '1125001',
            'kode_pos' => '35224',
        ];
    }
}

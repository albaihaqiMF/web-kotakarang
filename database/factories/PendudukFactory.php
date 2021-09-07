<?php

namespace Database\Factories;

use App\Models\Penduduk;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penduduk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nik' => rand(1871050000000001,1871069999999999),
            'no_kk' => rand(1871000000000001,1881000000000001),
            'jenis_kelamin' => rand(2233001, 2233002),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'agama' => rand(1111001,1111006),
            'pendidikan' => rand(1288001,1288008),
            'jenis_pekerjaan' => rand(8888001,8888012),
            'status_pernikahan' => rand(5252001,5252002),
            'kewarganegaraan' => rand(1705001,1705002),
            'nama_ayah'=>$this->faker->name('male'),
            'nama_ibu'=>$this->faker->name('female')
        ];
    }
}

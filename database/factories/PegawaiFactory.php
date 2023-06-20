<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'nama' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['L','P']),
            'alamat' => $this->faker->address(),
            'jabatan_id' => mt_rand(3,5),
            'email' => $this->faker->safeEmail(),
        ];
    }
}

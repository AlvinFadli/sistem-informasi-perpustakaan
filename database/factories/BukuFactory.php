<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
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
            'kode' => $this->faker->bothify('######'),
            'judul' => $this->faker->sentence(3,5),
            'kategori_id' => mt_rand(1,3),
            'pengarang_id' => mt_rand(1,3),
            'penerbit_id' => mt_rand(1,3),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengarang>
 */
class PengarangFactory extends Factory
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
            'alamat' => $this->faker->address(),
            'jenis_kelamin' => $this->faker->randomElement(['L','P']),
            'email' => $this->faker->safeEmail(),
        ];
    }
}

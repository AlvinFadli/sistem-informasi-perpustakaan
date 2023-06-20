<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Penerbit>
 */
class PenerbitFactory extends Factory
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
            'nama' => $this->faker->sentence(1,2),
            'alamat' => $this->faker->address(),
            'email' => $this->faker->safeEmail(),
            'no_telp' => $this->faker->phoneNumber(),
            'no_fax' => $this->faker->e164PhoneNumber(),
        ];
    }
}

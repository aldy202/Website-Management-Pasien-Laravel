<?php

namespace Database\Factories;

use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataPasien>
 */
class DataPasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'umur' => fake()->numberBetween(1,20),
            'gender' => fake()->randomElement(['Laki-Laki', 'Perempuan']),
            'no_telp' => fake()->phoneNumber(),
            'tgl_perawatan' => fake()->date(),
            'keluhan' => fake()->name(),
            'tindakan' => fake()->name(),
            'status' => fake()->randomElement(['Rawat Inap', 'Tidak Rawat Inap'])
        ];
    }
}
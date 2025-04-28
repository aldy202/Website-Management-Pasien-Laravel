<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataTenagaMedis>
 */
class DataTenagaMedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake() -> name(),
            'umur' => fake() -> numberBetween(17, 40),
            'email' => fake() -> email(),
            'no_telp' => fake() -> phoneNumber(),
            'gender' => fake()->randomElement(['Laki-Laki','Perempuan'])
        ];
    }
}

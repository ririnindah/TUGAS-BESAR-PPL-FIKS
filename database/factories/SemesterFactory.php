<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Semester>
 */
class SemesterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'semester' => $this->faker->numberBetween(1, 8),
            'status' => $this->faker->randomElement(['Belum Diisikan', 'Sudah Diisikan', 'Sudah Lulus PKL', 'Sudah Lulus Skripsi']),
            'mhs_id' => $this->faker->numberBetween(1, 10)
        ];
    }
}

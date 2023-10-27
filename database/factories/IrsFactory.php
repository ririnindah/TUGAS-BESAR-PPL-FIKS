<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Irs>
 */
class IrsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jumlah_sks' => $this->faker->numberBetween(1, 14),
            'smt_id' => $this->faker->numberBetween(1, 10),
            'mhs_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}

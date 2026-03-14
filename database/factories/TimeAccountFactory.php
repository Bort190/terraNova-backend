<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TimeAccount>
 */
class TimeAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(0, -20, 20),
            'status' => $this->faker->randomElement(['positive', 'equal', 'negative']),
            'vacation_days' => $this->faker->numberBetween(20, 35),
        ];
    }
}

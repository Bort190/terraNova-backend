<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horse>
 */
class HorseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'type' => fake()->randomElement(['brown', 'white', 'bronze', 'brown/white']),
            'date_of_birth' => fake()
                ->dateTimeBetween(now()->subYears(20), now())
                ->format('Y-m-d'),
        ];
    }
}

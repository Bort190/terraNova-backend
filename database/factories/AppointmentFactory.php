<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Appointment>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start = Carbon::instance($this->faker->dateTimeBetween('now', '+1 years'));

        return [
            'name' => $this->faker->realText(50),
            'type' => $this->faker->randomElement(['Tierarzt', 'Hufschmied', 'Ausritt', 'Transport']),
            'starts_at' => $start,
            'ends_at' => $start->copy()->addMinutes(rand(30, 180)),
            'responsible_user' => $this->faker->name(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\TimeAccount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'position' => $this->faker->jobTitle(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'salary' => $this->faker->numberBetween(100000, 1000000),
        ];
    }

    public function configure(): EmployeeFactory|Factory
    {
        return $this->afterCreating(function ($employee) {

            $email = Str::slug($employee->first_name.'.'.$employee->last_name).'@test.de';

            $employee->user->update([
                'email' => $email
            ]);

        });
    }

}

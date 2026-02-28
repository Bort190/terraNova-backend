<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Horse;
use App\Models\User;
use Database\Factories\HorseFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Horse::factory(20)->create();
        Appointment::factory(20)->create();
    }
}

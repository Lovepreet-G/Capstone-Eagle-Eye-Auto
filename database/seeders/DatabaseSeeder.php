<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\employees;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
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
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'gillpreetsingh35@gmail.com',
            'password' => 'password'
        ]);

        Employees::factory(5) ->create();
    }

}

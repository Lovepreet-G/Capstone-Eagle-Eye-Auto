<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            // "employee_name" => fake() ->Name(),
            // "email" => fake() ->unique()->safeEmail(),
            // "mobile" => fake() ->unique()->phoneNumber(),
            // "address" => fake() ->address(),
            // "joining_date" => fake() ->date(),
            // "job_role" => fake() ->jobRole()

        ];
    }
}

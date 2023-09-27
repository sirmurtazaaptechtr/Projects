<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
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
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'phone'=>fake()->phoneNumber(),
            'age'=>fake()->numberBetween(18,45),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'country'=>fake()->country()
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'gebruikersnaam' => $this->faker->userName,
            'volledige_naam' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'team' => $this->faker->randomDigit(),
            'password' => bcrypt($this->faker->password),
        ];
    }
}
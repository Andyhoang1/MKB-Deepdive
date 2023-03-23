<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Verzoek>
 */
class VerzoekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'verzoek_titel' => $this->faker->sentence(2),
            'verzoek_omschrijving' => $this->faker->sentence(6),
            'verzoek_status' => $this->faker->randomElement(['Open', 'Afgerond']),
            'verzoek_body' => $this->faker->paragraph(20),
            'verzoek_beloning' => $this->faker->numberBetween(1000, 10000),
            'bedrijf_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
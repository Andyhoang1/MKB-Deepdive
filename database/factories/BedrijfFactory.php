<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bedrijf>
 */
class BedrijfFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bedrijf_naam' => $this->faker->company,
            'bedrijf_email' => $this->faker->companyEmail,
            'bedrijf_telefoon' => $this->faker->phoneNumber,
            'bedrijf_website' => $this->faker->domainName,
        ];
    }
}
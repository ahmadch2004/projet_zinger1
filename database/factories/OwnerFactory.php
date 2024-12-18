<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Owner;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // liste prédefinie à utiliser pour les pays
        $countries = ['USA', 'Canada', 'UK', 'France', 'Germany', 'Australia', 'Italy', 'Spain'];

        return [
            'first_name' => $this->faker->firstName,
            'last_surname' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'e-mail' => $this->faker->unique()->safeEmail,
            'date_of_birth' => $this->faker->date('Y-m-d', '2000-01-01'),
            'country' => $this->faker->randomElement($countries)
        ];
    }
}

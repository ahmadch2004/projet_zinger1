<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tank;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tank>
 */
class TankFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         // Predefined list of tank names
         $tankNames = ['Tank Alpha', 'Tank Bravo', 'Tank Charlie', 'Tank Delta', 'Tank Echo'];

         return [
             'name' => $this->faker->randomElement($tankNames), // Random tank name
             'max_volume' => $this->faker->randomFloat(2, 100, 10000), // Volume between 100 and 10000 with 2 decimals
         ];
    }
}

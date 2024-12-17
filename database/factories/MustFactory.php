<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Must>
 */
class MustFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            // liste prédefinie pour les differents types
            $types = ['Type A', 'Type B', 'Type C', 'Type D'];

            return [
                'type' => $this->faker->randomElement($types), // Random type from list
                'volume' => $this->faker->randomFloat(2, 10, 1000), // Volume between 10 and 1000 with 2 decimals
                'plot_adress' => $this->faker->address, // Random address
            ];
    }
}

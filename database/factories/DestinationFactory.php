<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'destination' => $this->faker->name(['A1','A2','A3','A4','A5','A6','A7','A8', 'A9','A10']),
            'price' =>$this->faker->numberBetween(40000,80000),
            'departure' => $this->faker->date(),
        ];
    }
}

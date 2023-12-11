<?php

namespace Database\Factories;

use App\Models\CardModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends CardModel
 */
class CardModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'power' => rand(),
            'image' => 'image.jpg',
        ];
    }
}

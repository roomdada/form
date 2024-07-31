<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            "description" => $this->faker->paragraph,
            'disponibility' => $this->faker->boolean,
            'price' => $this->faker->numberBetween(100, 1000),
            "category_id" => $this->faker->numberBetween(1, \App\Models\Category::count())
        ];
    }
}
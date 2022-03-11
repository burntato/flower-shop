<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Featured>
 */
class FeaturedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'img_name' => $this->faker->numberBetween($min = 1, $max = 2),
            'title' => $this->faker->sentence(),
            'desc' => $this->faker->paragraph(),
        ];
    }
}

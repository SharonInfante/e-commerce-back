<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => $this->faker->word(),
            'code' => $this->faker->numberBetween(),
            'price' => $this->faker->randomFloat(2, 0, 1000),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->image(null, 640, 480),
        ];
    }
}
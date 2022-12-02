<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        // Factory con el contenido del product.
        return [
            'name' => fake()->word(),
            'stock' => rand(1,9999),
            'price' => rand(1,50),
            'description' => fake()->realText(),
            'category' => fake()->word()
        ];
    }
}

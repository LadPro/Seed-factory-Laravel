<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            
            'name' => fake()->name(),
            'short_description'=> fake()->sentence(),
            'description'=> fake()->paragraph(3),
            'price'=> fake()->numberBetween(100, 1000),
            
            // 'name' => Str::random(25),
            // 'short_description'=> Str::random(45),
            // 'description'=> Str::random(150),
            // 'price'=> random_int(100, 1000),
        ];
    }
}

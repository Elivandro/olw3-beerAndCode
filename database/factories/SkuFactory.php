<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SkuFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake('pt_BR')->word,
            'price' => fake()->randomFloat(2, 500, 1000),
            'description' => fake('pt_BR')->paragraph(1)
        ];
    }
}

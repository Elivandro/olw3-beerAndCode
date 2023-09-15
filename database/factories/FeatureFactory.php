<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeatureFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['cor', 'tamanho']),
            'unit' => fake('pt_BR')->word
        ];
    }
}

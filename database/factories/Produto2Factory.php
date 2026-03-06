<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Produto2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomeProduto' => fake()->word(),
            'precoProduto' => fake()->randomFloat(3,false),
            'quantidadeProduto' => fake()->randomNumber(3,false),
        ];
    }
}

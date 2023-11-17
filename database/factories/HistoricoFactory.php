<?php

namespace Database\Factories;

use App\Models\Investimento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Historico>
 */
class HistoricoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_investimento' => Investimento::factory(), 
            'value' => fake()->numerify('##.##')
        ];
    }
}

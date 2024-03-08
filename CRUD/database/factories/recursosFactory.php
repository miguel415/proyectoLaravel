<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class recursosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $id_curso = curso::inRandomOrder()->first()->id;
        return [
            'nombre_recurso' => fake()->text(),
            'tipo_recurso' => fake()->text(),
            'durabilidad' => fake()->randomNumber(),
            'id_curso' => $id_curso,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\curso;
use App\Models\peces;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\peces>
 */
class pecesFactory extends Factory
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
            'nombre_comun' => fake()->text(),
            'nombre_cientifico' => fake()->text(),
            'tamano_promedio' => fake()->text(),
            'descripcion' => fake()->text(),
            'id_curso' => $id_curso,
        ];
    }
}

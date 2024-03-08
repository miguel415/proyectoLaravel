<?php

namespace Database\Factories;
use App\Models\curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\leccion>
 */
class leccionFactory extends Factory
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
            'titulo' => fake()->text(),
            'contenido' => fake()->text(),
            'id_curso' => $id_curso,
        ];
    }
}

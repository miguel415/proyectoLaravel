<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use app\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\curso>
 */
class cursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipoCurso = ["pesca en mar","pesca en rio","pesca en lago", "pesca de mosca"];
        $aleatorio = random_int(0,3);
        // Generamos un id aleatorio de los que ya tenemos en bd
        $id_usuario = User::inRandomOrder()->first()->id;
        return [
            'titulo' => $tipoCurso[$aleatorio],
            'descripcion' => fake()->text(),
            'imagen' => fake()->image(),
            'id_usuario' => $id_usuario,
        ];
    }
}

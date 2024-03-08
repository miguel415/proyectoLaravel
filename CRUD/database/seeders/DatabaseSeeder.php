<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\curso::factory(10)->create();
        \App\Models\peces::factory(10)->create();
        \App\Models\leccion::factory(10)->create();
        \App\Models\nudos::factory(10)->create();
        \App\Models\recursos::factory(10)->create();
        \App\Models\tipo_de_pesca::factory(10)->create();
        \App\Models\habitat::factory(10)->create();


    }
}

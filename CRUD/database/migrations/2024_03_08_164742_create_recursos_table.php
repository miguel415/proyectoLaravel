<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_recurso'); 
            $table->string('tipo_recurso'); 
            $table->integer('durabilidad');
            $table->unsignedBigInteger('id_curso'); 
            $table->timestamps(); 

            
            $table->foreign('id_curso')
                ->references('id')
                ->on('cursos')
                ->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos');
    }
};

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
        Schema::create('nudos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre'); 
            $table->string('ubicacion'); 
            $table->string('tipo'); 
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
        Schema::dropIfExists('nudos');
    }
};

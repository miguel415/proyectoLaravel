<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peces extends Model
{
    use HasFactory;
        // creamos un array $fillable para guardar todas las propiedades

    protected $fillable = [
        'nombre_comun','nombre_cientifico','tamano_promedio','descripcion','id_curso',
    ];
}

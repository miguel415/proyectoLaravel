<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_de_pesca extends Model
{
    use HasFactory;
        // creamos un array $fillable para guardar todas las propiedades

    protected $fillable = [
        'nombre','descripcion','tecnica','id_curso','id_pez',
    ];
}

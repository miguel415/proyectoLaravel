<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recursos extends Model
{
    use HasFactory;
        // creamos un array $fillable para guardar todas las propiedades

    protected $fillable = [
        'nombre_recurso','tipo_recurso','durabilidad','id_curso',
    ];
}

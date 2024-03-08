<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nudos extends Model
{
    use HasFactory;
        // creamos un array $fillable para guardar todas las propiedades

    protected $fillable = [
        'nombre','ubicacion','tipo','id_curso',
    ];
}

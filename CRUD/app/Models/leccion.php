<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leccion extends Model
{
    use HasFactory;
        // creamos un array $fillable para guardar todas las propiedades

    protected $fillable = [
        'titulo','contenido','id_curso',
    ];
}

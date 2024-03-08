<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;

    // creamos un array $fillable para guardar todas las propiedades
    protected $fillable = [
        'titulo','descripcion','imagen','descripcion','id_usuario'
    ];

    
}

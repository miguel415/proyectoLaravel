<?php

namespace App\Http\Controllers;

use App\Models\curso;
use Illuminate\Http\Request;

class cursosController extends Controller{

public function index()
{
    //Devuelve un array paginado de cursos de 3 en 3
    //Ordenado por los últimos
    $cursos = curso::all();    

    return view('curso.index',compact('cursos'));
}

/**
 * "Mostrar el formulario para crear un nuevo recurso."
 */
public function create()
{
    return view('curso.create');
}

/**
 * Almacenar un recurso recién creado en el almacenamiento.
 */
public function store(Request $request)
{
    curso::create($request->all());
    return redirect()->route('curso.index')
            ->withSuccess('Se ha creado un nuevo curso.');
}

/**
 * Mostrar el recurso especificado.
 */
public function show(String $id)
{
    //Cargamos el curso correspondiente
    $curso = curso::find($id);

    //Lo mandamos a la vista
    return view('curso.show', [
        'curso' => $curso
    ]);
}

/**
 * Mostrar el formulario para editar el recurso especificado.
 */
public function edit($id)
{

    //Cargamos el curso correspondiente
    $curso = curso::find($id);

    return view('curso.edit', compact('curso'));
}

/**
 * Actualizar el recurso especificado en el almacenamiento.
 */
public function update(Request $request, String $id)
{
    //Cargamos el curso correspondiente
    $curso = curso::find($id);

    //Actualizamos los datos del curso
    $curso->update($request->all());

    //Retornamos a la pagina previa
    return redirect()->back()
            ->withSuccess('El curso ha sido modificado.');
}

/**
 * Eliminar el recurso especificado del almacenamiento.
 */
public function destroy(String $id)
{

    //Cargamos el curso correspondiente
    $curso = curso::find($id);

    //Borramos el curso
    $curso->delete();

    //retornamos a la ruta indice
    return redirect()->route('curso.index')
            ->withSuccess('El curso se ha borrado correctamente.');
}
}
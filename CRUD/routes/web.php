<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cursosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Ruta principal
Route::get('/', [cursosController::class,'index'])->name('curso.index');

//Ruta que con el id de discoteca carga los datos y se los pasa al formulario de edicino
Route::get('/curso/{id}/edit', [cursosController::class,'edit'])->name('curso.edit');

//Ruta para cargar la vista de creaccion
Route::get('/curso/create', [cursosController::class,'create'])->name('curso.create');

//guarda en bd los datos de la discote
Route::post('/curso', [cursosController::class,'store'])->name('curso.store');

//Ruta para que muestre los datos de una discoteque
Route::get('/curso/{id}', [cursosController::class,'show'])->name('curso.show');


//Ruta que guarda datos en la bd
Route::put('/curso/{id}', [cursosController::class,'update'])->name('curso.update');

//Eliminamos la discoteca con id que recibe
Route::delete('/curso/{id}', [cursosController::class,'destroy'])->name('curso.destroy');
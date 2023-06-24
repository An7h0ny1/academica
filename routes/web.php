<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Barrios;
use App\Http\Controllers\Ciudades;
use App\Http\Controllers\Departamentos;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminaFac');
Route::get('/facultades/{id}/editar',[Facultades::class, 'edit'])->name('editarFac');
Route::patch('/facultades/{id}', [Facultades::class, 'update'])->name('facultades.update');







/*Route::get('/programas/listado', [Programas::class, 'index']);*/

Route::resource('/programas/listado', Programas::class);

Route::resource('/profesores/listado', Profesores::class)->names('profesores');

Route::resource('/estudiantes/listado', Estudiantes::class)->names('estudiantes');

Route::resource('/barrios/listado', Barrios::class)->names('barrios');

Route::resource('/ciudades/listado', Ciudades::class)->names('ciudades');

Route::resource('/departamentos/listado', Departamentos::class)->names('departamentos');

//Route::get('/estudiantes/listado', [Estudiantes::class, 'index']);

//Route::get('/profesores/listado', [Profesores::class, 'index']);

Route::get('/regnotas/listado', [Calificaciones::class, 'index']);








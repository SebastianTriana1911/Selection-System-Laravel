<?php

use App\Http\Controllers\OcupacionesControllers;
use App\Models\Ocupaciones;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Ruta que llama el metodo index del controlador Ocupaciones que llama todos los registros de la bd para
// que por medio de un foreach vaya iterando las arrays con los registros mostrando solo el nombre de la
// ocupacion
Route::get("index/ocupaciones", [OcupacionesControllers::class, "index"])->name("index.ocupaciones");

// Ruta que llama el metodo create del controlador Ocupaciones que retorna la vista que contiene el
// formulario a llenar
Route::get("create/ocupaciones", [OcupacionesControllers::class, "create"])->name("create.ocupaciones");

// Ruta con metodo post que recibe los datos ingresados por el formulario y llama el metodo strore del
// controlador Ocupaciones, que dicho metodo sube la informacion a la bd y retorna una redireccion a la
// vista ocupaciones.index
Route::post("store/ocupaciones", [OcupacionesControllers::class, "store"])->name("store.ocupaciones");

// Ruta que llama el metodo show del controlador Ocupaciones que pide como parametro un id, para recuperar
// todos los registros de dicho id por el metodo estatico find() y asi mostrar la variable que contiene
// todos los registros en la vista asignandole el campo que se desea mostrar
Route::get("show/{id}/ocupacion", [OcupacionesControllers::class, "show"])->name("show.ocupaciones");
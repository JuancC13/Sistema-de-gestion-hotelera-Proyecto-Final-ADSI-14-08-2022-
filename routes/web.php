<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoHabitacionController;

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

//Pagina de inicio
Route::get('/', function () {
    return view('home');
});

//Pagina Dashboard
Route::get('administrador', function () {
    return view('dashboard');
});

//Rutas de Tipos de Habitaciones
Route::get('admin/tipohabitacion/{id}/delete',[TipoHabitacionController::class,'destroy']);
Route::resource('admin/tipohabitacion',TipoHabitacionController::class);




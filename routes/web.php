<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TipoHabitacionController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TipoServicioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\EmpleadoController;


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

//Pagina Login
Route::get('administrador/login',[AdminController::class,'login']);
Route::post('administrador/login',[AdminController::class,'check_login']);
Route::get('administrador/logout',[AdminController::class,'logout']);




//Pagina Dashboard
Route::get('administrador', function () {
    return view('dashboard');
});

//Rutas de Tipos de Habitaciones
Route::get('admin/tipohabitacion/{id}/delete',[TipoHabitacionController::class,'destroy']);
Route::resource('admin/tipohabitacion',TipoHabitacionController::class);

//Rutas de Habitaciones
Route::get('admin/habitaciones/{id}/delete',[HabitacionController::class,'destroy']);
Route::resource('admin/habitaciones',HabitacionController::class);

//Rutas de Clientes
Route::get('admin/cliente/{id}/delete',[ClienteController::class,'destroy']);
Route::resource('admin/cliente',ClienteController::class);

//Rutas de Tipos de Servicios
Route::get('admin/tiposervicio/{id}/delete',[TipoServicioController::class,'destroy']);
Route::resource('admin/tiposervicio',TipoServicioController::class);

//Rutas de Servicios
Route::get('admin/servicio/{id}/delete',[ServicioController::class,'destroy']);
Route::resource('admin/servicio',ServicioController::class);

//Rutas de Tipos de Empleados
Route::get('admin/tipoempleado/{id}/delete',[TipoEmpleadoController::class,'destroy']);
Route::resource('admin/tipoempleado',TipoEmpleadoController::class);

//Rutas de Empleados
Route::get('admin/empleado/{id}/delete',[EmpleadoController::class,'destroy']);
Route::resource('admin/empleado',EmpleadoController::class);
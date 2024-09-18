<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\EnmensajeController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\MonitoreoController;
use App\Models\Cliente;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('welcome');
});
Route:: controller(EnmensajeController::class)->group(function() {
    Route:: get ('enviarmensajes', 'index');
    Route:: get ('enviarmensajes/crear', 'crear');
});

Route::controller(MensajeController::class)->group(function() {
        Route::get('mensajes', 'index')->name('mensajes.index'); // Ruta para ver mensajes
        Route::get('mensajes/crear', 'crear')->name('mensajes.crear'); // Ruta para el formulario de crear mensaje
        Route::post('mensajes', 'store')->name('mensajes.store'); // Ruta para almacenar el nuevo mensaje
        Route::get('mensajes/{id}/editar', 'editar')->name('mensajes.editar'); // Ruta para mostrar el formulario de edición
        Route::put('mensajes/{id}', 'update')->name('mensajes.update'); // Ruta para actualizar el mensaje
        Route::delete('mensajes/{id}', 'destroy')->name('mensajes.destroy'); // Ruta para eliminar el mensaje
   
});


Route:: controller(usuarioController::class)->group(function() {
    Route:: get ('usuarios', 'index');
    Route:: get ('usuarios/crear', 'crear');
});

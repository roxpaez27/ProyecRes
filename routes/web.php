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
|
*/

Route::get('/', function () {
    return view('welcome');
});
/**Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('roles/eliminarId/{id}',[RolController::class, 'eliminarId'])->name('roles.eliminar');
Route::post('mensajes/eliminarId/{id}',[MensajeController::class, 'eliminarId'])->name('mensajes.eliminar');

//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('mensajes', MensajeController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('monitoreos', MonitoreoController::class);
 


});

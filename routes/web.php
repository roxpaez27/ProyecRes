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
Route:: controller(MensajeController::class)->group(function() {
    Route:: get ('mensajes', 'index');
    Route:: get ('mensajes/crear', 'crear');
});
Route:: controller(usuarioController::class)->group(function() {
    Route:: get ('usuarios', 'index');
    Route:: get ('usuarios/crear', 'crear');
});

<?php

use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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
Route::post('/datos-sensor', 'SensorController@guardarDatosSensor');

    Route::view('/login', "login")->name('login');
    Route::view('/registro', "register")->name('registro');
    Route::view('/privada', "secret")->middleware('auth')->name('privada');

    Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
    Route::post('/iniciar-sesión',[LoginController::class,'login'])->name('iniciar-sesión');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    Route::get('/locations',[LocationController::class,'locations'])->name('location');

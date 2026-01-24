<?php

use App\Http\Controllers\CarpasController;
use App\Http\Controllers\DecoracionController;
use App\Http\Controllers\InflablesController;
use App\Http\Controllers\MobiliarioController;
use App\Http\Controllers\RokolasController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('/renta-de-inflables-en-leon' , InflablesController::class)->name('inflables');

Route::get('/renta-de-sillas-y-mesas-en-leon', MobiliarioController::class)->name('mobiliario');

Route::get('/renta-de-carpas-y-toldos-en-leon', CarpasController::class)->name('carpas');

Route::get('/renta-de-bocinas-rokolas-en-leon', RokolasController::class)->name('rokolas');

Route::get('/decoracion-con-globos-en-leon', DecoracionController::class)->name('decoracion');



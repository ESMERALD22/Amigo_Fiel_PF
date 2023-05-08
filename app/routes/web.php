<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\TipoAnimalController;
use App\Http\Controllers\HogarController;
use App\Http\Controllers\IngresoAnimalController;
use App\Http\Controllers\RegistroMedicoController;
use App\Http\Controllers\SalidaAnimalController;
use App\Http\Controllers\AdoptanteController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\VistaController;




use App\Models\TipoAnimal;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('animales', AnimalController::class);
Route::resource('tipoAnimales', TipoAnimalController::class);

Route::resource('hogares', HogarController::class);
Route::resource('ingresoAnimales', IngresoAnimalController::class);
Route::resource('registrosMedicos', RegistroMedicoController::class);
Route::resource('salidaAnimales', SalidaAnimalController::class);

Route::resource('adoptantes', AdoptanteController::class);

Route::resource('contratos', ContratoController::class);

Route::get('vista/{id}', [VistaController::class, 'ver']);
Route::get('hogar/{id}', [VistaController::class, 'elegirHogar']);


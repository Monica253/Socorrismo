<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Empleados;

use App\Http\Controllers\CentroController;
use App\Http\Controllers\PiscinaController;
use App\Http\Controllers\EncargadoController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('centros', [CentroController::class, 'index'])->name('centros.index');
Route::get('centros/{centro}', [CentroController::class, 'show'])->name('centros.show');
Route::get('piscinas', [PiscinaController::class, 'index'])->name('piscinas.index');
Route::get('piscinas/{piscina}', [PiscinaController::class, 'show'])->name('piscinas.show');
Route::get('encargados', [EncargadoController::class, 'index'])->name('encargados.index');
Route::get('encargados/{encargado}', [EncargadoController::class, 'show'])->name('encargados.show');
Route::get('empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('empleados/{empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('empleado', Empleados::class);
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CentroController;
use App\Http\Controllers\PiscinaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DiasTrabajoController;

use App\Http\Controllers\LanguageController;


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
})->middleware('auth');     //La aplicación solo es accesible para usuarios registrados

Route::get('/offline', function () {
    return view('offline');
});

//App::setLocale('en');		//Para cambiar el idioma desde aquí
//Para cambiar el idioma desde las banderitas de la app
Route::get('lang/{lang}', [LanguageController::class, 'swap'])->name('lang.swap');

Route::get('centros', [CentroController::class, 'index'])->name('centros.index');
Route::get('centros/{centro}', [CentroController::class, 'show'])->name('centros.show');
Route::get('piscinas', [PiscinaController::class, 'index'])->name('piscinas.index');
Route::get('piscinas/{piscina}', [PiscinaController::class, 'show'])->name('piscinas.show');
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('calendar', [DiasTrabajoController::class, 'index'])->name('calendar.index');
Route::get('calendar/{dia}', [DiasTrabajoController::class, 'show'])->name('calendar.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
//use App\Http\Controllers\Admin\EncargadoController;
use App\Http\Controllers\Admin\EmpleadoController;
use App\Http\Controllers\Admin\CentroController;
use App\Http\Controllers\Admin\DiasTrabajoController;
use App\Http\Controllers\Admin\PiscinaController;

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('users', UserController::class)->names('admin.users');
Route::resource('roles', RoleController::class)->names('admin.roles');

//Route::resource('encargados', EncargadoController::class)->middleware('can:admin.home')->names('admin.encargados');
Route::resource('empleados', EmpleadoController::class)->names('admin.empleados');
Route::resource('centros', CentroController::class)->middleware('can:admin.home')->names('admin.centros');
Route::resource('piscinas', PiscinaController::class)->middleware('can:admin.home')->names('admin.piscinas');
Route::resource('dias', DiasTrabajoController::class)->middleware('can:admin.home')->names('admin.dias');
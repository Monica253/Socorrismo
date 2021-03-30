<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CentroController;
use App\Http\Controllers\Admin\DiasTrabajoController;
use App\Http\Controllers\Admin\PiscinaController;

use App\Http\Controllers\Admin\UserController;
//use App\Http\Controllers\Admin\RoleController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('users', UserController::class)->names('admin.users');

/*->middleware('can:admin.home')*/
Route::resource('centros', CentroController::class)->middleware('can:admin.home')->names('admin.centros');
Route::resource('piscinas', PiscinaController::class)->middleware('can:admin.home')->names('admin.piscinas');
Route::resource('dias', DiasTrabajoController::class)->middleware('can:admin.home')->names('admin.dias');
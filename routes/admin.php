<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EncargadoController;
use App\Http\Controllers\Admin\EmpleadoController;
use App\Http\Controllers\Admin\CentroController;
use App\Http\Controllers\Admin\DiasTrabajoController;
use App\Http\Controllers\Admin\PiscinaController;

Route::get('', [HomeController::class, 'index']);
Route::resource('encargados', EncargadoController::class)->names('admin.encargados');
Route::resource('empleados', EmpleadoController::class)->names('admin.empleados');
Route::resource('centros', CentroController::class)->names('admin.centros');
Route::resource('piscinas', PiscinaController::class)->names('admin.piscinas');
Route::resource('dias', DiasTrabajoController::class)->names('admin.dias');
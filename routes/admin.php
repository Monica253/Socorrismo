<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EncargadoController;
use App\Http\Controllers\Admin\EmpleadoController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\PiscinaController;

Route::get('', [HomeController::class, 'index']);
Route::resource('encargados', EncargadoController::class)->names('admin.encargados');
Route::resource('empleados', EmpleadoController::class)->names('admin.empleados');
Route::resource('hoteles', HotelController::class)->names('admin.hoteles');
Route::resource('piscinas', PiscinaController::class)->names('admin.piscinas');
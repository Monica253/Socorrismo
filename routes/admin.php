<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CentroController;
use App\Http\Controllers\Admin\DiasTrabajoController;
use App\Http\Controllers\Admin\PiscinaController;

use App\Http\Controllers\Admin\UserController;
//use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PDFController;

Route::get('', [HomeController::class, 'index'])->name('admin.home')->middleware('can:admin.home');

Route::resource('users', UserController::class)->names('admin.users')->middleware('can:admin.home');

Route::resource('centros', CentroController::class)->middleware('can:admin.home')->names('admin.centros');
Route::resource('piscinas', PiscinaController::class)->middleware('can:admin.home')->names('admin.piscinas');
Route::resource('dias', DiasTrabajoController::class)->middleware('can:admin.home')->names('admin.dias');

/* PDF */
Route::get('/pdfusers',[PDFController::class, 'PDFUsers'])->middleware('can:admin.home')->name('usersPDF');
Route::get('/pdfpiscinas',[PDFController::class, 'PDFPiscinas'])->middleware('can:admin.home')->name('piscinasPDF');
Route::get('/pdfcentros',[PDFController::class, 'PDFCentros'])->middleware('can:admin.home')->name('centrosPDF');
Route::get('/pdfdiastrabajo',[PDFController::class, 'PDFDiasTrabajo'])->middleware('can:admin.home')->name('diastrabajoPDF');
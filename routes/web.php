<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\FormRotorController;
use App\Http\Controllers\FormFrontHousingController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\DataRotorController;
use App\Http\Controllers\DataFrontHousingController;
use App\Http\Controllers\DisplayController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DisplayController::class, 'index'])->name('dashboard');

Route::get('/ccd', [DisplayController::class, 'ccd'])->name('display.index');
Route::get('/ganti', [DisplayController::class, 'ganti'])->name('display.ganti');

Route::get('/rotor', [DisplayController::class, 'rotor'])->name('display-rotor.index');
Route::get('/ganti_rotor', [DisplayController::class, 'ganti_rotor'])->name('display-rotor.ganti');

Route::get('/front_housing', [DisplayController::class, 'front_housing'])->name('display-fh.index');
Route::get('/ganti_fh', [DisplayController::class, 'ganti_fh'])->name('display-fh.ganti');

Route::resource('/form', FormController::class);
Route::resource('/data', DataController::class);

Route::resource('/formrotor', FormRotorController::class);
Route::resource('/datarotor', DataRotorController::class);

Route::resource('/formfh', FormFrontHousingController::class);
Route::resource('/datafh', DataFrontHousingController::class);
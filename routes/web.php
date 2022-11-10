<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\DataController;
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

Route::get('/', [DisplayController::class, 'index'])->name('display.index');
Route::get('/ganti', [DisplayController::class, 'ganti'])->name('display.ganti');

Route::resource('/form', FormController::class);
Route::resource('/data', DataController::class);

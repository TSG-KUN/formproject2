<?php

use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function() {
    return view('form');
});

Route::get('/form-1', [FormController::class, 'Page1'])->name('form-1');
Route::post('/form-1/proses', [FormController::class, 'Page1Proses'])->name('form-1-proses');
Route::get('/form-2', [FormController::class, 'Page2'])->name('form-2');
Route::post('/form-2/proses', [FormController::class, 'Page2Proses'])->name('form-2-proses');
// Route::resource('/form/process', FormController::class);
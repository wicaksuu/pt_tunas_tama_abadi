<?php

use App\Http\Controllers\HomeTemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// halaman depan
Route::get('/', [HomeTemplateController::class, 'index'])->name('landing-page');
Route::get('/about', [HomeTemplateController::class, 'about'])->name('about');
Route::get('/hasil-proyek', [HomeTemplateController::class, 'hasil_proyek'])->name('hasil-proyek');
Route::get('/kontak', [HomeTemplateController::class, 'kontak'])->name('kontak');


// end halaman depan



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

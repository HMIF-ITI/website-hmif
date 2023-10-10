<?php

use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\KepengurusanController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DepartemenController;
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

Route::get('/', [LandingPageController::class, 'index']);

// Route::get('/prestasi', function () {
// 	return view('prestasipage');
// });

// Routes User
// Home
Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.home');

// Prestasi
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');

// Galery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Kepengurusan
Route::get('/kepengurusan', [KepengurusanController::class, 'index'])->name('kepengurusan.index');

// Departemen
Route::get('/departemen', [DepartemenController::class, 'index'])->name('departemen.index');


// Routes Admin

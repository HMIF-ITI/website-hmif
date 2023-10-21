<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UpcomingController;
use App\Http\Controllers\admin\OngoingController;
use App\Http\Controllers\admin\AchievmentController;
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
Route::get('/', [LandingPageController::class, 'index']);

// Prestasi
Route::get('/prestasi', [PrestasiController::class, 'index']);

// Galery
Route::get('/gallery', [GalleryController::class, 'index']);

// Kepengurusan
Route::get('/kepengurusan', [KepengurusanController::class, 'index']);

// Departemen
Route::get('/departemen', [DepartemenController::class, 'index']);


// Routes Admin
// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('upcoming', UpcomingController::class)->middleware('auth');
Route::resource('ongoing', OngoingController::class)->middleware('auth');
Route::resource('achievment', AchievmentController::class)->middleware('auth');
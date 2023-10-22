<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\UpcomingController;
use App\Http\Controllers\admin\OngoingController;
use App\Http\Controllers\admin\AchievmentController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\ManagementController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\MomentController;
use App\Http\Controllers\HomeController;

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

// Route::get('/prestasi', function () {
// 	return view('prestasipage');
// });

// Routes User
// Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/prestasi', [HomeController::class, 'prestasi']);
Route::get('/galeri', [HomeController::class, 'gallery']);
Route::get('/departemen', [HomeController::class, 'departemen']);
Route::get('/kepengurusan', [HomeController::class, 'kepengurusan']);


// Routes Admin
// Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

// Dashboard
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::resource('upcoming', UpcomingController::class);
    Route::resource('ongoing', OngoingController::class);
    Route::resource('achievment', AchievmentController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('management', ManagementController::class);
    Route::resource('moment', MomentController::class);

    Route::get('contact', [ContactController::class, 'index']);
    Route::put('contact/{id}', [ContactController::class, 'update']);
});

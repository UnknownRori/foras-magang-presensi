<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::prefix('auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [LoginController::class, 'view'])->name('login');
        Route::post('/login', [LoginController::class, "post"])->name('post-login');
    });

    Route::post('/logout', LogoutController::class)->middleware('auth')->name('logout');
});

Route::prefix('/dashboard')->middleware('auth')->name('dashboard.')->group(function () {
    Route::get('/', DashboardController::class)->name('main');

    Route::get('/edit-profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/edit-profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::resource('/check-in', CheckInController::class)->only('index');
    Route::resource('/check-out', CheckOutController::class)->only('index');

    Route::middleware('admin')->group(function () {
        Route::resource('/users', UserController::class);
    });

    Route::middleware('non-admin')->group(function () {
        Route::resource('/check-in', CheckInController::class)->only(['store', 'create']);
        Route::resource('/check-out', CheckOutController::class)->only(['store', 'create']);
    });
});

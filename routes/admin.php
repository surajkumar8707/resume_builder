<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\HomePageCarouselController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "Admin" middleware group. Make something great!
|
*/

// Admin routes
Route::get('/login', [LoginController::class, 'showAdminLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'adminLogin'])->name('login.post');
Route::post('/logout', [LoginController::class, 'adminLogout'])->name('logout');

// Authenticated routes
Route::middleware('role:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/profile', [AdminController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/change-password', [AdminController::class, 'changePassword'])->name('password');
    Route::post('/update-password', [AdminController::class, 'updatePassword'])->name('update.password');
    Route::get('/setting', [AdminController::class, 'setting'])->name('setting');
    Route::post('/setting-update/{id}', [AdminController::class, 'settingUpdate'])->name('setting.update');

    Route::get('/contacts', [AdminController::class, 'contacts'])->name('contacts');

    Route::get('/social-media', [AdminController::class, 'socialMedia'])->name('social.media');
    Route::post('/social-media-update/{id}', [AdminController::class, 'socialMediaUpdate'])->name('social.media.update');

    Route::resource('home-page-carousel', HomePageCarouselController::class);
    Route::post('/change-status', [HomePageCarouselController::class, 'changeStatus'])->name('change.status');
});

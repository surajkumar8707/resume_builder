<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\ResumeController;
use App\Http\Controllers\User\Auth\LoginController;


// Admin routes
Route::get('/login', [LoginController::class, 'showUserLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'userLogin'])->name('login.post');
Route::get('/register', [LoginController::class, 'showUserRegisterForm'])->name('register.form');
Route::post('/register', [LoginController::class, 'userRegister'])->name('register.post');

// Authenticated routes
Route::middleware('auth')->group(function () {

    Route::post('/logout', [LoginController::class, 'userLogout'])->name('logout');
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::post('/profile', [UserController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/change-password', [UserController::class, 'changePassword'])->name('password');
    Route::post('/update-password', [UserController::class, 'updatePassword'])->name('update.password');

    Route::group(['prefix' => 'my-resume', 'as' => 'my.resumes.'], function () {
        Route::get('/', [ResumeController::class, 'index'])->name('index');
        Route::get('/create', function () {
            return redirect()->route('front.create.cv');
        })->name('create');
        Route::post('/store', [ResumeController::class, 'store'])->name('store');
        Route::get('/{resume}/show', [ResumeController::class, 'show'])->name('show');
        Route::get('/{resume}/print', [ResumeController::class, 'print'])->name('print');
    });
    // Route::get('/setting', [UserController::class, 'setting'])->name('setting');
    // Route::post('/setting-update/{id}', [UserController::class, 'settingUpdate'])->name('setting.update');
});

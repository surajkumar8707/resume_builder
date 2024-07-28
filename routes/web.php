<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\ResumeController;
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
    return redirect()->route('front.index');
});

Route::group(['prefix' => '/', 'as' => 'front.'], function () {
    Route::get('/', [FrontController::class, 'index'])->name('index');
    Route::get('/create-cv', [FrontController::class, 'createCV'])->name('create.cv');
    Route::get('/{id}/export-cv', [FrontController::class, 'exportCv'])->name('export.cv');
    Route::post('/submit-cv', [FrontController::class, 'submitCV'])->name('submit.cv');
    Route::post('/temp-image-create', [FrontController::class, 'tempImageCreate'])->name('temp.image.create');
    Route::get('/{resume}/print', [ResumeController::class, 'print'])->name('print');
});

Route::get('lang/{locale}', [\App\Http\Controllers\LanguageController::class, 'switchLang']);

require __DIR__ . '/auth.php';

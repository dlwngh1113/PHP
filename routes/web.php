<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FreeBoardController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/')->group(function () {
    Route::get('verify/{token}', [VerificationController::class, 'verify'])->name('verify');

    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::get('register', [LoginController::class, 'register'])->name('register');
    Route::post('register', [LoginController::class, 'validate_register'])->name('validate_register');
    Route::post('login', [LoginController::class, 'validate_login'])->name('validate_login');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('verification')->name('verification.')->middleware(['auth', 'verified'])->group(function() {
    Route::get('notice', [VerificationController::class, 'notice'])->name('notice');
});

Route::prefix('user')->name('user.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::post('/reset_password', [ProfileController::class, 'reset_password'])->name('reset_password');
    Route::post('/delete_user', [ProfileController::class, 'delete_user'])->name('delete_user');
});

Route::prefix('freeboard')->name('freeboard.')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/', [FreeBoardController::class, 'index'])->name('index');
    Route::get('/{post}', [FreeBoardController::class, 'show'])->name('show');
    Route::get('/store', [FreeBoardController::class, 'store'])->name('store');
});

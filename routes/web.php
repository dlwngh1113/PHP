<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FreeBoardController;
use App\Http\Controllers\VerificationController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('verification')->name('verification.')->middleware(['auth', 'signed'])->group(function() {
    Route::get('/notice', [VerificationController::class, 'notice'])->name('notice')->withoutMiddleware(['signed']);
    Route::post('/notice', [VerificationController::class, 'verify_email'])->name('email');
});

Route::prefix('freeboard')->name('freeboard.')->middleware(['auth', 'verified'])->group(function(){
    Route::get('/', [FreeBoardController::class, 'index'])->name('index');
    Route::get('/{post}', [FreeBoardController::class, 'show'])->name('show');
    Route::get('/store', [FreeBoardController::class, 'store'])->name('store');
});

Route::prefix('profile')->name('profile.')->middleware(['auth', 'verified'])->group(function(){
    Route::get('reset_password', [LoginController::class, 'reset_password'])->name('reset_password');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'validate_register')->name('validate_register');
    Route::post('login', 'validate_login')->name('validate_login');
    Route::get('logout', 'logout')->name('logout');
});

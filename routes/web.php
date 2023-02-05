<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FreeBoardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('freeboard')->name('freeboard.')->middleware(['auth'])->group(function(){
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

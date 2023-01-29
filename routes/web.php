<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FreeBoardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
    Route::get('logout', 'logout')->name('logout');
    Route::post('register', 'validate_register')->name('validate_register');
    Route::post('login', 'validate_login')->name('validate_login');
    Route::get('dashboard', 'dashboard')->name('dashboard');
    Route::get('reset_password', 'reset_password')->name('reset_password');
});

Route::middleware(['auth'])->group(function () {

    Route::controller(FreeBoardController::class)->name('freeboard.')->prefix('freeboard')->group(function () {
        Route::get('/', 'index')->name('index');
    });

});

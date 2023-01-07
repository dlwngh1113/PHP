<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController2;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

Route::get('/', function() {
    return redirect('roomEscape');
});

//Route::middleware(['auth'])->group(function () {
    Route::resource('roomEscape', TaskController2::class);
    Route::resource('user', UserController::class);
    Route::resource('user/register', RegisterController::class);
//});
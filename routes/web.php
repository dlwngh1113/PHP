<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController2;
use App\Http\Controllers\UserController;

Route::get('/', function() {
    return redirect('roomEscape');
});

Route::resource('roomEscape', TaskController2::class);
Route::resource('user', UserController::class);
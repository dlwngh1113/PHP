<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController2;

Route::controller(TaskController2::class)->group(function () {
    Route::get('/', 'index');
});

Route::resource('roomEscape', TaskController2::class);
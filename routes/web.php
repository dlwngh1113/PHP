<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController2;

Route::get('/', function() {
    return redirect('roomEscape');
});

Route::resource('roomEscape', TaskController2::class);
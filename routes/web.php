<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskController2;
use App\Http\Controllers\TaskControllerApi;

Route::get('/', [TaskController::class, 'index']);
Route::resource('tasks', TaskController2::class);
Route::apiResource('apiTask', TaskControllerApi::class);
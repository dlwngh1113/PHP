<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomEscapeController;
use App\Http\Controllers\UserController;

Route::get('/', function() {
    return view('dashboard');
})->name('verification.notice');

//Route::middleware(['auth'])->group(function () {
    Route::resource('roomEscape', RoomEscapeController::class);
    Route::prefix('user')->name('user.')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('login');
        Route::post('/', [UserController::class, 'authenticate']);
        Route::get('/create',[UserController::class, 'create'])->name('create');
    });
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

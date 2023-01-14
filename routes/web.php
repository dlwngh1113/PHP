<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomEscapeController;
use App\Http\Controllers\UserController;

Route::get('/', function() {
    return redirect('roomEscape');
});

//Route::middleware(['auth'])->group(function () {
    Route::resource('roomEscape', RoomEscapeController::class);
    Route::prefix('user')->name('user.')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('login');
        Route::post('/', [UserController::class, 'store']);
        Route::get('/create',[UserController::class, 'create'])->name('create');
    });
//});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentLikeController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::prefix('/')->group(function () {
    Route::get('verify/{token}', [VerificationController::class, 'verify'])->name('verify');

    Route::get('login', [LoginController::class, 'login'])->name('login');
    Route::get('register', [LoginController::class, 'register'])->name('register');
    Route::post('register', [LoginController::class, 'verificate_register'])->name('verificate_register');
    Route::post('login', [LoginController::class, 'verificate_login'])->name('verificate_login');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});

Route::prefix('verification')->name('verification.')->middleware(['auth', 'verified'])->group(function() {
    Route::get('notice', [VerificationController::class, 'notice'])->name('notice');
});

Route::prefix('user')->name('user.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile');
    Route::post('/reset_password', [ProfileController::class, 'reset_password'])->name('reset_password');
    Route::post('/delete_user', [ProfileController::class, 'delete_user'])->name('delete_user');
});

Route::prefix('board/{id}')->name('board.')->group(function(){
    Route::get('/', [BoardController::class, 'index']);

    Route::controller(PostController::class)->group(function($id) {
        Route::get('/index', [PostController::class, 'index'])->name('index');
        Route::get('/{post}', [PostController::class, 'show'])->name('show');

        Route::middleware(['auth', 'verified'])->group(function () {
            Route::post('/store', [PostController::class, 'store'])->name('store');
        });
    });
});

Route::prefix('comment')->name('comment.')->middleware(['auth', 'verified'])->group(function () {
    Route::post('/comment_like', [CommentLikeController::class, 'verificate_like'])->name('verificate_like');
    Route::post('/comment_dislike', [CommentLikeController::class, 'verificate_dislike'])->name('verificate_dislike');
});

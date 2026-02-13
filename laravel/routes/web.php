<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/about', [indexController::class, 'about'])->name('about');
Route::get('auth/login', [AuthController::class, 'login'])->name('login');
Route::post('auth/login', [AuthController::class, 'authenticate'])->name('authenticate');

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

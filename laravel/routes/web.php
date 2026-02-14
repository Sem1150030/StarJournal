<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\JournalController;
use Illuminate\Support\Facades\Route;


    Route::get('/', [indexController::class, 'index'])->name('index');
    Route::get('/about', [indexController::class, 'about'])->name('about');

Route::middleware(['guest'])->group(function () {
    Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
    Route::post('/auth/login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/auth/register', [AuthController::class, 'register'])->name('register');
    Route::post('/auth/register', [AuthController::class, 'store'])->name('register.store');
});

    Route::middleware(['auth'])->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/journals/{journal}/edit', [JournalController::class, 'create'])->name('journal.edit');
        Route::get('/journals', [JournalController::class, 'index'])->name('journal.index');
        Route::get('/journals/{journal}', [JournalController::class, 'show'])->name('journal.show');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    });

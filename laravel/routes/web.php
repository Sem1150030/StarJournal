<?php

use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;


Route::get('/', [indexController::class, 'index'])->name('index');
ROute::get('/about', [indexController::class, 'about'])->name('about');


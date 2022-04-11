<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::post('/register', [MainController::class, 'register'])->name('register');

Route::get('/profile/{id}', [MainController::class, 'profile'])->name('profile');

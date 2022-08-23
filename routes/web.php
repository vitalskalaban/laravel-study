<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::get('/about', [MainController::class, 'about'])->name('about');

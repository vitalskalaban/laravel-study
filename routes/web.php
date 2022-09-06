<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ContactController;

Route::get('/', [MainController::class, 'index'])->name('home');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::post('/contact', [ContactController::class, 'store'])->name('contact_store');

Route::get('/contact', [ContactController::class, 'show'])->name('show');

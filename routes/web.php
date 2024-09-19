<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::resource('category', CategoryController::class);


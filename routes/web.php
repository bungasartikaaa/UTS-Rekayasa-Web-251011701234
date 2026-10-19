<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcoProductController;

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/products', [EcoProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [EcoProductController::class, 'show'])
    ->name('products.show');

Route::get('/profile', function () {
    return view('page.profile');
})->name('profile');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');
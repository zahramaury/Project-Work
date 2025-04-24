<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

// Home Page

Route::get('/', [CommentController::class, 'index']);


// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Product Page
Route::get('/product', function () {
    return view('product');
})->name('product');

// Service Page
Route::get('/service', function () {
    return view('service');
})->name('service');

// Testimoni Page
Route::get('/testimoni', function () {
    return view('testimoni');
})->name('testimoni');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');


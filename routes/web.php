<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileImageController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/amarsinghsengar', function () {
    return view('portfolio');
})->name('amarsinghsengar');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/profile-image', [ProfileImageController::class, 'getLinkedInImage'])->name('profile.image');

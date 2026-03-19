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

Route::get('/sitemap.xml', function () {
    $pages = [
        ['loc' => 'https://sengaram.in/', 'lastmod' => '2026-03-19', 'changefreq' => 'weekly', 'priority' => '1.0'],
        ['loc' => 'https://sengaram.in/amarsinghsengar', 'lastmod' => '2026-03-19', 'changefreq' => 'monthly', 'priority' => '0.8'],
        ['loc' => 'https://sengaram.in/contact', 'lastmod' => '2026-03-19', 'changefreq' => 'monthly', 'priority' => '0.6'],
    ];
    $content = view('sitemap', ['pages' => $pages]);
    return response($content, 200)->header('Content-Type', 'application/xml');
})->name('sitemap');

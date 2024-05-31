<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Raditya',
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('blog', function () {
    return view('blog');
});

<?php


use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ BlogController::class , 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signup', function () {
    return view('register');
});

Route::get('/signin', function () {
    return view('register');
});

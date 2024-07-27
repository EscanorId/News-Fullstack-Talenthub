<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/profiles', function () {
    return view('profiles');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
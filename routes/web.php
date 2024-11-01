<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.signin');
});
Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/for', function () {
    return view('auth.for');
});

Route::get('/home', function () {
    return view('dashboard.home');
});

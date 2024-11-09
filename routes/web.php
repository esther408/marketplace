<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.signin');
});
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::get('/for', function () {
    return view('auth.for');
});

Route::get('/home', function () {
    return view('auth.home');
});

Auth::routes();




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

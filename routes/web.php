<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.home');
});
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

Route::get('/for', function () {
    return view('auth.for');
});

Auth::routes();




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

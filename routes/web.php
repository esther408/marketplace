<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


route::get('/',function()
{
    return view('menu');
}
);
route::get('/register',function()
{
    return view('auth.passwords.register');
}
);
route::get('/for',function()
{
    return view('auth.passwords.for');
}
);
route::get('/dashboard',function()
{
    return view('home');
}
);

Route::post('/', [loginController::class, 'login'])->name('login');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('/admin/users', AdminUserController::class);
    Route::resource('/admin/products', AdminProductController::class);
    Route::get('/admin/reports', [AdminController::class, 'reports'])->name('admin.reports');
});
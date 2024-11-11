<?php


use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;


route::get('/',function()
{
    return view('auth.passwords.signin');
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

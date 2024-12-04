<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


route::get('/',function()
{
    return view('menu');
}
);
// route::get('/signin',function()
// {
//     return view('auth.passwords.signin');
// }
// );
// route::get('/register',function()
// {
//     return view('auth.passwords.register');
// }
// );
route::get('/for',function()
{
    return view('auth.passwords.for');
}
);
route::get('/home',function()
{
    return view('home');
}
);
route::get('/farmer',function()
{
    return view('dashboard.farmer');
}
);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



// Route::post('/signin', [loginController::class, 'login'])->name('login');
// Route::post('/register', [RegisterUserController::class, 'store'])->name('register');
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::middleware(['auth', 'admin'])->group(function () {
   // Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
  //  Route::resource('/admin/users', AdminUserController::class);
   // Route::resource('/admin/products', AdminProductController::class);
   // Route::get('about',function(){  
  //      return view ('about');
  //  })->middleware('auth');
 //   Route::get('/admin/reports', [AdminController::class, 'reports'])->name('admin.reports');
//});
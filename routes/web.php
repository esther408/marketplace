<?php
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerDashboardController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\SupportController;


// Route for Home
Route::get('/', function () {
    return view('menu');
});

// Password Recovery
Route::get('/for', function () {
    return view('auth.passwords.for');
});

// Home Page
Route::get('/home', function () {
    return view('home');
});

// Farmer Dashboard
Route::get('/farmer', function () {
    return view('dashboard.farmer');
});


// Registration Routes

Route::get('/register', [RegisterUserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');

// Login Route
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');  // Show login form
Route::post('login', [LoginController::class, 'login'])->name('login.store');  // Handle login

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware(['guest'])
    ->name('login');

    Route::middleware(['auth', 'role:farmer'])->group(function () {
        Route::get('/farmer/dashboard', [FarmerDashboardController::class, 'index'])->name('farmer.dashboard');
        Route::get('/farmer/products', [FarmerProductController::class, 'index'])->name('farmer.products');
        Route::get('/farmer/add-product', [FarmerProductController::class, 'create'])->name('farmer.add_product');
        Route::middleware(['auth'])->group(function () {
            Route::get('/farmer/dashboard', [FarmerDashboardController::class, 'index'])->name('farmer.dashboard');
        });
    });
     //farmer market price
    Route::middleware(['auth', 'role:farmer'])->group(function () {
        Route::get('/farmer/market-prices', [MarketPriceController::class, 'index'])->name('farmer.market_prices');
    });
    //farmer weather
    Route::middleware(['auth', 'role:farmer'])->group(function () {
        Route::get('/farmer/weather', [WeatherController::class, 'index'])->name('farmer.weather');
    });

    Route::middleware(['auth'])->group(function () {
        Route::get('/support', [SupportController::class, 'index'])->name('support');
    });
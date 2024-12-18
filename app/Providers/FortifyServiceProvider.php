<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Laravel\Fortify\Contracts\RegisterViewResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Fortify::registerView(function () {
            return view('auth.passwords.register'); // Reba niba iyi view ihari
        });
    }
   
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
        Fortify::loginView(function () {
            return view('auth.passwords.signin');
        });

         // Customize where the user is redirected after login
        Fortify::authenticateUsing(function (Request $request) {
            $credentials = $request->only('email', 'password');
        
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
        

            /// Redirecting users based on their role
            if ($user->role === 'farmer') {
                return redirect()->route('farmer.dashboard');
            
            } elseif ($user->role == 'buyer') {
                return redirect()->route('buyer.dashboard');
            } elseif ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }

            // Default redirect for other users
            return redirect()->route('home');
        }
        return false;
        });
    }

        // Customize where the user is redirected after login
        
   
       
    }
    


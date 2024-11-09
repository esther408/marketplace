<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
       // Logout function
       public function logout(Request $request)
       {
           Auth::logout(); // Logs out the user
           $request->session()->invalidate(); // Invalidate the session
           $request->session()->regenerateToken(); // Regenerate CSRF token
   
           return redirect('/'); // Redirect to homepage or any other route
       }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
       
    ]);

    $credentials = $request->only('email', 'password',);

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return redirect()->intended('/farmer');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

protected function authenticated(Request $request, $user)
{
    if ($user->role === 'farmer') {
        return redirect('/farmer')->route('farmer.dashboard');
    }

    return redirect()->route('home');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterUserController extends Controller
{

public function store(Request $request)
{
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'role' => 'required|in:farmer,buyer,expert,driver,admin',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
    ]);

    $user = User::create([
        'firstname' => $request->firstname,
        'lastname' => $request->lastname,
        'role' => $request->role,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

   $message= auth()->login($user);

    if ($message) {
        return redirect()->back()->with('success', 'User created successfully!');
    }
    else {
        return redirect()->back()->with('fail', 'User created fail!');
    }
}
}
<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;  // Make sure Auth is imported

class RegisterUserController extends Controller
{
    // Show Registration Form (optional)
    public function create()
    {
        return view('auth.register');  // Assuming you have a view for the registration form
    }
    public function showRegistrationForm()
    {
        return view('auth.passwords.register'); // Hano uhamagara view yitwa 'auth.register'
    }

    // Handle the Registration Post Request
    public function store(Request $request)
    {
        // Validate user input
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'role' => 'required|in:farmer,buyer,expert,driver,admin',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Create a new user
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Attempt to log in the user
        Auth::login($user);  // Use Auth::login() instead of auth()->login()

        // Redirect after registration with success message
        return redirect()->route('dashboard')->with('success', 'User created successfully!');
    }
}
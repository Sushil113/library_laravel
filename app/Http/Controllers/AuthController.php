<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //show the login page
    public function login()
    {
        return view('auth.login');
    }

    //show the register page
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'semester' => 'required',
        ]);

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user',
                'semester' => $request->semester,
            ]);

            return redirect()->route('login')->with('success', 'Account created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create account. Please try again.');
        }
    }
}

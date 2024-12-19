<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'semester' => 'required|integer|min:1|max:8',
        ]);

        $user = Auth::user();

        $user->name = $request->input('name');
        $user->semester = $request->input('semester');
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\OtpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function showOtpPage(Request $request)
    {
        $user_id = $request->query('user_id');
        return view('auth.otp', compact('user_id'));
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
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user',
                'semester' => $request->semester,
            ]);

            $otp = random_int(1000, 9999);

            Redis::setex('otp:user:' . $user->id, 300, $otp);

            $data = [
                'subject' => 'Your OTP Code',
                'title' => 'OTP Verification',
                'heading' => 'Verify Your Account',
                'otp' => $otp,
                'message' => 'Please use this OTP to verify your account. It is valid for 5 minutes.'
            ];

            Mail::to($user->email)->send(new OtpMail($data));

            return redirect()->route('verification', ['user_id' => $user->id])->with('success', 'OTP send to your email. Please verify your account.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|integer',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $user_id = $request->user_id;

        $otpKey = 'otp:user:' . $user_id;
        $storedOtp = Redis::get($otpKey);

        if (!$storedOtp) {
            return redirect()->back()->with('error', 'The OTP has expired. Please request a new one.');
        }

        if ($request->otp == $storedOtp) {
            $user = User::findOrFail($user_id);
            Log::info("User found: " . $user->email);
            $user->update([
                'email_verification_status' => '1',
                'email_verified_at' => now(),
            ]);

            Redis::del($otpKey);
            Log::info("User updated and Redis key deleted.");
            return redirect()->route('login')->with('success', 'Your account has been verified!');
        }

        return redirect()->back()->with('error', 'Invalid OTP. Please try again.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->email_verification_status != 1) {
                Auth::logout(); 
                return back()->withErrors([
                    'email' => 'Your account is not verified. Please verify your account.',
                ])->withInput($request->except('password'));
            }

            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'Login successful!');
        }

        return back()->withErrors([
            'email' => 'Invalid Credentials',   
        ])->withInput($request->except('password'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully!');
    }
}

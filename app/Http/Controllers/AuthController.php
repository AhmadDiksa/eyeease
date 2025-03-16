<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout berhasil.');
    }
}

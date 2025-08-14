<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login
     */
    public function showLoginForm()
    {
        return view('auth.login'); // pastikan file ada di resources/views/auth/login.blade.php
    }

    /**
     * Proses login user
     */
    public function login(Request $request)
    {
        // Validasi form
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required'],
        ]);

        // Coba login
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/'); // arahkan ke dashboard/home
        }

        // Gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Proses logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

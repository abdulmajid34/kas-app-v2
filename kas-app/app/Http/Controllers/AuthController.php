<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|exists:users,username|max:12',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return match (Auth::user()->role) {
                'admin' => redirect()->intended('/admin/user'),
                'ketua_kelas' => redirect()->intended('/ketua_kelas/kelas'),
                'bendahara' => redirect()->intended('/bendahara/siswa'),
                'siswa' => redirect()->intended('/siswa/todos'),
                default => redirect('/'),
            };
        }

        return back()->withErrors(['login' => 'Username atau password salah!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

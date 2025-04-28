<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Siswa;

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

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            if (Auth::user()->role === 'admin') {
                return redirect()->intended('/admin/user');
            } elseif (Auth::user()->role === 'ketua_kelas') {
                return redirect()->intended('/ketua_kelas/kelas');
            } elseif (Auth::user()->role === 'bendahara') {
                return redirect()->intended('/bendahara/siswa');
            } elseif (Auth::user()->role === 'siswa') {
                $dataSiswa = Siswa::where('user_id', $user->id)->first();
                if($dataSiswa) {
                    return redirect()->intended('/siswa/todos');
                }
                return redirect()->intended('/siswa/profile/create');
            } else {
                return redirect('/');
            }
        }

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return match (Auth::user()->role) {
        //         'admin' => redirect()->intended('/admin/user'),
        //         'ketua_kelas' => redirect()->intended('/ketua_kelas/kelas'),
        //         'bendahara' => redirect()->intended('/bendahara/siswa'),
        //         'siswa' => redirect()->intended('/siswa/todos'),
        //         default => redirect('/'),
        //     };
        // }

        return back()->withErrors(['login' => 'Username atau password salah!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // $request->session()->invalidate();
        // $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}

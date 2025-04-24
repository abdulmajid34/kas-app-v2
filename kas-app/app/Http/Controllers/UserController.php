<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = Auth::user(); // Mengambil pengguna yang sedang login
        return view('users.index', compact('users')); // Mengirim data pengguna ke view
    }

    // Add other methods for creating, updating, and deleting users as needed
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get(); // Mengambil pengguna yang sedang login
        return view('users.index', compact('users')); // Mengirim data pengguna ke view
    }

    // Add other methods for creating, updating, and deleting users as needed
}

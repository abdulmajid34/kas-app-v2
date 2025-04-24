<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;

// use Illuminate\Support\Facades\Auth;

// Your custom unauthorized page
Route::get('/unauthorized', function () {
    $title = 'Unauthorized';
    return view('errorpage.401', compact('title'));
});

Route::fallback(function () {
    $title = 'Page Not Found';
    return view('errorpage.404', compact('title'));
});

Route::get('/404', function () {
    $title = 'Page Not Found';
    return view('errorpage.404', compact('title'));
})->name('404');

Route::get('forbidden', function () {
    return view('errorpage.403');
})->name('forbidden');

Route::prefix('auth')->middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});

Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Route admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});

// Route ketua kelas
Route::middleware(['auth', 'role:ketua_kelas'])->prefix('ketua_kelas')->group(function () {
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
});

// Route Bendahara
Route::middleware(['auth', 'role:bendahara'])->prefix('bendahara')->group(function () {
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
});

// Route ketua kelas
Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->group(function () {
    Route::get('/todos', [TodosController::class, 'index'])->name('todos.index');
});

Route::get('/', fn () => redirect('/auth/login'));
// Route::get('/', function () {
//     if (Auth::check()) {
//         return match (Auth::user()->role) {
//             'admin' => redirect('/admin/user'),
//             'ketua_kelas' => redirect('/ketua/dashboard'),
//             'bendahara' => redirect('/bendahara/dashboard'),
//             'siswa' => redirect('/siswa/dashboard'),
//             default => abort(403),
//         };
//     }

//     return redirect()->route('login');
// });

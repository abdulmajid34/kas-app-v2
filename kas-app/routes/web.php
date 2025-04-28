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
    // Route CRUD Users
    Route::get('/user', [UserController::class, 'index'])->name('admin.user');

    // ROUTE CRUD KELAS
    Route::get('/kelas', [KelasController::class, 'index'])->name('admin.kelas');

    // ROUTE CRUD SISWA
    Route::get('/siswa', [SiswaController::class, 'index'])->name('admin.siswa');

    // ROUTE CRUD TODOS
    Route::get('/todos', [TodosController::class, 'index'])->name('admin.todos');
});

// Route ketua kelas
Route::middleware(['auth', 'role:ketua_kelas'])->prefix('ketua_kelas')->group(function () {
    Route::get('/kelas', [KelasController::class, 'index'])->name('ketua_kelas.kelas');
    Route::get('/user', [UserController::class, 'index'])->name('ketua_kelas.user');
    Route::get('/siswa', [SiswaController::class, 'index'])->name('ketua_kelas.siswa');
    Route::get('/todos', [TodosController::class, 'index'])->name('ketua_kelas.todos');
});

// Route Bendahara
Route::middleware(['auth', 'role:bendahara'])->prefix('bendahara')->group(function () {
    Route::get('/siswa', [SiswaController::class, 'index'])->name('bendahara.siswa');
    Route::get('/kelas', [KelasController::class, 'index'])->name('bendahara.kelas');
    Route::get('/todos', [TodosController::class, 'index'])->name('bendahara.todos');
});

// Route ketua kelas
Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->group(function () {
    Route::get('/todos', [TodosController::class, 'index'])->name('siswa.todos');

    // Route CRUD SISWA
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.siswa');
    Route::get('/profile', [SiswaController::class, 'showProfile'])->name('siswa.profile');
    Route::get('/profile/create', [SiswaController::class, 'createProfile'])->name('siswa.profile.create');
    Route::post('/profile/store', [SiswaController::class, 'storeProfile'])->name('siswa.profile.store');

    Route::get('/kelas', [KelasController::class, 'index'])->name('siswa.kelas');
});

// Redirect root
Route::get('/', function () {
    if (!\Illuminate\Support\Facades\Auth::check()) {
        return redirect()->route('login');
    }

    $role = \Illuminate\Support\Facades\Auth::user()->role;

    return match ($role) {
        'admin' => redirect()->route('admin.user'),
        'ketua_kelas' => redirect()->route('ketua_kelas.kelas'),
        'bendahara' => redirect()->route('bendahara.siswa'),
        'siswa' => redirect()->route('siswa.todos'),
        default => abort(403)
    };
});

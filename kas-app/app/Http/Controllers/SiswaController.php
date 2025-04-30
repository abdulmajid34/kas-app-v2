<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $query = Siswa::query();
        $list_siswa = $query->with(['user', 'kelas'])->get();
        return view('siswa.index', compact('list_siswa'));
    }
    public function showProfile()
    {
        $data_siswa = Siswa::with(['user', 'kelas'])
        ->where('user_id', Auth::id())
        ->first(); // pakai first() agar dapat 1 object

    return view('siswa.profile', compact('data_siswa'));
    }
    public function createProfile()
    {
        // $kelas = Kelas::find(Auth::user()->kelas_id); // Ambil kelas berdasarkan user
        $kelas = Kelas::first();
        return view('siswa.create', compact('kelas'));
    }
    public function storeProfile(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'email' => 'required|email',
            'nim' => 'required|string|max:12|unique:siswa,nim',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'status' => 'boolean',
            'alamat' => 'required|string|max:100',
            'agama' => 'required|in:1,2,3,4,5,6,7',
            'no_watshapp' => 'required|string',
            'tentang_saya' => 'nullable|string',
        ]);

        try {
            $validated['user_id'] = Auth::id();

            $kelas = Kelas::first();
            $validated['kelas_id'] = $kelas->id;

            Siswa::create($validated);

            return redirect()->route('siswa.profile')->with('success', 'Profile created successfully!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();
        }
    }

}

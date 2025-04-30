<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $list_kelas = Kelas::all();
        return view('kelas.index', compact('list_kelas'));
    }
}

@extends('layouts.app')
@section('content')
<h1 class="">Profile Siswa</h1>
<span>
    @if($data_siswa && count($data_siswa) > 0)
    <span>{{ $data_siswa }}</span>
    @else
    <div class="d-flex justify-content-center">
        <h4 class="text-secondary">Data siswa tidak ditemukan</h4>
        @if(Auth::user()->role == 'ketua_kelas')
        <button class="btn btn-primary">
            <a href="{{ route('ketua_kelas.profile.create') }}" class="text-white">Update Profile</a>
        </button>
        @elseif(route(Auth::user()->role == 'siswa'))
        {{-- <button class="btn btn-primary">
            <a href="{{ route('siswa.profile.create') }}" class="text-white">Update Profile</a>
        </button> --}}
        @endif
    </div>
    @endif
</span>
@endsection

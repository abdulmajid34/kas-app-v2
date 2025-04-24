

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User</h2>
        <p>Role: {{ $users->role }}</p>
        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
@endsection

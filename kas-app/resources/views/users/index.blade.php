

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>User</h2>
        <p>Role: {{ $users->role }}</p>
    </div>
@endsection

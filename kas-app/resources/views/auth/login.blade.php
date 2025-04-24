@extends('layouts.guest')

@section('content')
    <div class="auth-sidecontent">
        <img src="{{ asset('assets/images/authentication/img-auth-sideimg.jpg') }}" alt="images"
            class="img-fluid img-auth-side" />
    </div>

    <div class="auth-form">
        <div class="d-flex">
        </div>
        <div class="card my-5">
            <h2 class="text-center text-primary">System Management Keuangan Kelas (KAS app)</h2>
            <div class="card-body">
                <h2 class="text-center text-primary f-w-500 mb-3">Login Page</h2>

                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endif
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="row g-4">
                        <div class="col-xl-12">
                            <div class="form-floating mb-0">
                                <input type="text" id="floatingUsername"
                                    class="form-control @error('username') is-invalid @enderror" name="username" autofocus
                                    required value="{{ old('username') }}" placeholder="Username">
                                <label for="floatingUsername">Username</label>
                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="form-floating mb-0">
                                <input type="password" id="floatingPassword"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="password"
                                    name="password" required>
                                <label for="floatingPassword">Password</label>
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
@endsection


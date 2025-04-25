@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card welcome-banner bg-blue-800">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="p-4">
                                <h2 class="text-white">Explore Redesigned Able Pro</h2>
                                <p class="text-white">
                                    The Brand new User Interface with power of Bootstrap
                                    Components. Explore the Endless possibilities with Able
                                    Pro.
                                </p>
                                <a href="https://1.envato.market/zNkqj6" class="btn btn-outline-light">Exclusive on
                                    Themeforest</a>
                            </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="img-welcome-banner">
                                <img src="{{ asset('assets/images/widget/welcome-banner.png') }}" alt="img"
                                    class="img-fluid" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>List User</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-icon btn-light-primary">
                            <i class="bi bi-box-arrow-in-down"></i>
                        </button>

                        <button class="btn btn-icon btn-light-primary mx-2">
                            <i class="bi bi-upload"></i>
                        </button>

                        <a href="" class="btn btn-icon btn-light-primary" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Tambah Data">
                            <i class="bi bi-plus-lg py-2"></i>
                        </a>
                    </div>

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

                    <div class="table-responsive">
                        <table class="table" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Nama Akun</th>
                                    <th>Role</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->nama_akun }}</td>
                                        <td>
                                            @if ($user->role == 'admin')
                                                <span class="badge bg-primary">Admin</span>
                                            @elseif ($user->role == 'ketua_kelas')
                                                <span class="badge bg-primary">Ketua Kelas</span>
                                            @elseif ($user->role == 'bendahara')
                                                <span class="badge bg-primary">Bendahara</span>
                                            @elseif ($user->role == 'siswa')
                                                <span class="badge bg-primary">Siswa</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($user->status == 1)
                                                <span class="badge bg-success">Aktif</span>
                                            @else
                                                <span class="badge bg-danger">Tidak Aktif</span>
                                            @endif
                                        </td>
                                        <td class="">
                                            <div class="d-flex justify-content-center">
                                                <button class="btn mx-1 btn-icon btn-light-warning" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Ubah">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>

                                                <form action="" method="post">
                                                    <!-- @csrf
                                                    @method('DELETE') -->
                                                    <button type="submit" class="btn btn-icon btn-light-danger"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus">
                                                        <i class="bi bi-trash-fill"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

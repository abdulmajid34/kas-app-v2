@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Kelas</h5>
                </div>
                <div class="card-body table-border-style">
                    @if (Auth::user()->role !== 'siswa')
                        <div class="d-flex justify-content-end mb-3">
                            <button class="btn btn-icon btn-light-primary">
                                <i class="bi bi-box-arrow-in-down"></i>
                            </button>

                            <button class="btn btn-icon btn-light-primary mx-2">
                                <i class="bi bi-upload"></i>
                            </button>

                            <a class="btn btn-icon btn-light-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Tambah Data">
                                <i class="bi bi-plus-lg py-2"></i>
                            </a>
                        </div>
                    @endif

                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th>Kode Kelas</th>
                                    <th>No Ruangan</th>
                                    <th>Fakultas</th>
                                    <th>Program Studi</th>
                                    <th>Jadwal Mata Kuliah</th>
                                    <th class="text-center">List Siswa</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_kelas as $list)
                                    <tr>
                                        <td>{{ $list->kode_kelas }}</td>
                                        <td>{{ $list->no_ruangan }}</td>
                                        <td>{{ $list->fakultas }}</td>
                                        <td>{{ $list->program_studi }}</td>
                                        <td>-</td>
                                        <td>{{ $list->user_id }}</td>
                                        <td class="">
                                            <div class="d-flex justify-content-center">
                                                @if (Auth::user()->role !== 'siswa')
                                                    <button class="btn mx-1 btn-icon btn-light-warning"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </button>
                                                @endif

                                                <button class="btn btn-icon btn-light-primary" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Lihat">
                                                    <i class="ti ti-eye f-18"></i>
                                                </button>
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

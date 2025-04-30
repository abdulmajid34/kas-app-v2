@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>List Siswa</h5>
                </div>
                <div class="card-body table-border-style">

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
                                    <th class="text-center">Nama Akun</th>
                                    <th>Role</th>
                                    <th>Kode Kelas</th>
                                    <th>No Ruangan</th>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th>NIM</th>
                                    <th class="text-center">Tanggal Lahir</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>No Watshapp</th>
                                    <th>Tentang Saya</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_siswa as $list)
                                    <tr>
                                        <td class="text-center">{{ $list->user->nama_akun }}</td>
                                        <td class="text-center">{{ $list->user->role }}</td>
                                        <td class="text-center">{{ $list->kelas->kode_kelas }}</td>
                                        <td class="text-center">{{ $list->kelas->no_ruangan }}</td>
                                        <td class="text-center">{{ $list->nama_lengkap }}</td>
                                        <td class="text-center">{{ $list->email }}</td>
                                        <td class="text-center">{{ $list->nim }}</td>
                                        <td class="text-center">{{ $list->tanggal_lahir }}</td>
                                        <td class="text-center">
                                            @if ($list->jenis_kelamin == 'L')
                                                <span class="badge bg-light-primary">Laki Laki</span>
                                            @else
                                                <span class="badge bg-light-primary">Perempuan</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($list->agama == 1)
                                                <span class="badge bg-light-primary">Islam</span>
                                            @elseif ($list->agama == 2)
                                                <span class="badge bg-light-primary">Protestan</span>
                                            @elseif ($list->agama == 3)
                                                <span class="badge bg-light-primary">Katolik</span>
                                            @elseif ($list->agama == 4)
                                                <span class="badge bg-light-primary">Hindu</span>
                                            @elseif ($list->agama == 5)
                                                <span class="badge bg-light-primary">Budha</span>
                                            @elseif ($list->agama == 6)
                                                <span class="badge bg-light-primary">Khonghucu</span>
                                            @elseif ($list->agama == 7)
                                                <span class="badge bg-light-primary">Kepercayaan Lainnya</span>
                                            @endif
                                        </td>
                                        <td>{{ $list->no_watshapp }}</td>
                                        <td>{{ $list->tentang_saya }}</td>
                                        <td>
                                            @if ($list->status == 1)
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

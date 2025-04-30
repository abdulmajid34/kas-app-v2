@extends('layouts.app')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h2 class="mb-0">Update Profile Siswa</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>Personal Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('profile.store') }}" method="post">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-4">
                                <label class="form-label">Nama Lengkap <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nama_lengkap" class="form-control" placeholder="nama lengkap">
                                @error('nama_lengkap')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">NIM <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="nim" class="form-control" placeholder="NIM">
                                @error('nim')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Kelas</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="kelas" class="form-control" value="{{ $kelas->kode_kelas ?? 'Kelas tidak ditemukan' }}" placeholder="Kelas" readonly>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Email <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control" placeholder="your email">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tanggal Lahir <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_lahir" max="{{ date('Y-m-d') }}">
                                @error('tanggal_lahir')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Jenis Kelamin <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-select" name="jenis_kelamin" id="formSelect">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Agama <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-select" name="agama" id="formSelect">
                                    <option selected>Pilih Agama</option>
                                    <option value="1">Islam</option>
                                    <option value="2">Protestan</option>
                                    <option value="3">Katolik</option>
                                    <option value="4">Hindu</option>
                                    <option value="5">Budha</option>
                                    <option value="6">Khonghucu</option>
                                    <option value="7">Kepercayaan lain</option>
                                </select>
                                @error('agama')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">No Watshapp <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="no_watshapp" class="form-control" placeholder="No Watshapp">
                                @error('no_watshapp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Alamat <span style="color: red">*</span></label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="alamat" placeholder="ketik pesan disini..." id="inputTextArea" cols="30"
                                    rows="10"></textarea>
                                @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Tentang Saya</label>
                            </div>
                            <div class="col-md-8">
                                <textarea class="form-control" name="tentang_saya" placeholder="ketik pesan disini..." id="inputTextArea"
                                    cols="30" rows="10"></textarea>
                                @error('tentang_saya')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="d-flex justify-content-end" style="margin-bottom: 3rem">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bi bi-save mx-2"></i>
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

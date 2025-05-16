@extends('layouts.app')
@section('content')
<h1 class="">Profile Siswa</h1>
<div class="card-header">
    <h5>Data Pribadi</h5>
</div>

<div class="col-lg-8 col-xxl-9">
    <!-- About Me Card -->
    <div class="card">
        <div class="card-header">
            <h5>Tentang Saya</h5>
        </div>
        <div class="card-body">
            <p class="mb-0">{{ $data_siswa['tentang_saya'] }}</p>
        </div>
    </div>

    <!-- Personal Details Card -->
    <div class="card">
        <div class="card-header">
            <h5>Personal Details</h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 pt-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Full Name</p>
                            <p class="mb-0">{{ $data_siswa['nama_lengkap'] }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Email</p>
                            <p class="mb-0">{{ $data_siswa['email'] }}</p>
                        </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">NIM</p>
                            <p class="mb-0">{{ $data_siswa['nim'] }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Tanggal Lahir</p>
                            <p class="mb-1">{{ $data_siswa['tanggal_lahir'] }}</p>
                        </div>
                </li>
                <li class="list-group-item px-0 ">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Jenis Kelamin</p>
                            <p class="mb-0">{{ $data_siswa['jenis_kelamin'] }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Status</p>
                            <p class="mb-1">{{ $data_siswa['status'] }}</p>
                        </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Alamat</p>
                            <p class="mb-0">{{ $data_siswa['alamat'] }}</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Phone</p>
                            <p class="mb-0">{{ $data_siswa['no_watshapp'] }}</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Agama</p>
                            <p class="mb-0">{{ $data_siswa['agama'] }}</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Education Card -->
    <div class="card">
        <div class="card-header">
            <h5>Education</h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0 pt-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Master Degree (Year)</p>
                            <p class="mb-0">2014-2017</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Institute</p>
                            <p class="mb-0">-</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Bachelor (Year)</p>
                            <p class="mb-0">2011-2013</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Institute</p>
                            <p class="mb-0">Imperial College London</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item px-0 pb-0">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">School (Year)</p>
                            <p class="mb-0">2009-2011</p>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-1 text-muted">Institute</p>
                            <p class="mb-0">School of London, England</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

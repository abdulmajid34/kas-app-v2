<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html"
                class="b-brand text-primary"><!-- ========   Change your logo from here   ============ -->
                <img src="/assets/images/my-logo-transparant.png" class="img-fluid" width="80" height="auto"
                    alt="logo" />
            </a>
            <h4>KAS app</h4>
            <span class="badge bg-light-primary rounded-pill ms-2 theme-version"> v1</span>
        </div>
        <div class="navbar-content">
            <div class="card pc-user-card">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" alt="user-image"
                                class="user-avtar wid-45 rounded-circle" />
                        </div>
                        <div class="flex-grow-1 ms-3 me-2">
                            <h6 class="mb-0">{{ Auth::user()->nama_akun }}</h6>
                            <small>{{ Auth::user()->username }} - {{ Auth::user()->role }}</small>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pc-navbar">
                <li class="pc-item pc-caption"><label>Halaman</label></li>
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'ketua_kelas')
                    <li
                        class="pc-item {{ URL::current() == route('user.index') || URL::current() == route('user.create') ? 'active' : '' }}">
                        <a href="{{ route('user.index') }}" class="pc-link"><span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-user"></use>
                                </svg></span><span class="pc-mtext">Users</span></a>
                    </li>
                @endif

                @php
                    $siswaExists = null;
                    if (Auth::user()->role == 'siswa') {
                        $siswaExists = \App\Models\Siswa::where('user_id', Auth::user()->id)->exists();
                    }
                @endphp

                <li class="pc-item">
                    <a href="{{ route('kelas.index') }}"
                        class="pc-link {{ Auth::user()->role == 'siswa' && !$siswaExists ? 'disabled' : '' }}"
                        @if (Auth::user()->role == 'siswa' && !$siswaExists) onclick="return false;" style="opacity: 0.6; cursor: not-allowed;" @endif><span
                            class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-fatrows"></use>
                            </svg> </span><span class="pc-mtext">Kelas</span></a>
                </li>
                @if (Auth::user()->role != 'siswa')
                    <li class="pc-item">
                        <a href="{{ route('siswa.index') }}" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-user-square"></use>
                                </svg> </span><span class="pc-mtext">Siswa</span></a>
                    </li>
                @endif
                <li class="pc-item">
                    <a href="{{ route('todos.index') }}"
                        class="pc-link {{ Auth::user()->role == 'siswa' && !$siswaExists ? 'disabled' : '' }}"
                        @if (Auth::user()->role == 'siswa' && !$siswaExists) onclick="return false;" style="opacity: 0.6; cursor: not-allowed;" @endif><span
                            class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-presentation-chart"></use>
                            </svg> </span><span class="pc-mtext">Todos List</span></a>
                </li>
                {{-- <li class="pc-item">
                    <a href="{{ route('pembayaran') }}"
                        class="pc-link {{ Auth::user()->role == 'siswa' && !$siswaExists ? 'disabled' : '' }}"
                        @if (Auth::user()->role == 'siswa' && !$siswaExists) onclick="return false;" style="opacity: 0.6; cursor: not-allowed;" @endif><span
                            class="pc-micon"><svg class="pc-icon">
                                <use xlink:href="#custom-dollar-square"></use>
                            </svg> </span><span class="pc-mtext">Pembayaran</span></a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>

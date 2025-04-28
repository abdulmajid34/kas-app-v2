<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.html"
                class="b-brand text-primary"><!-- ========   Change your logo from here   ============ -->
                <img src="/assets/images/my-logo-transparant.png" class="img-fluid" width="80" height="auto"
                    alt="logo" />
            </a>
            <h4>KAS app</h4>
            <span class="badge bg-light-primary rounded-pill ms-2 theme-version"> v2</span>
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


            <!-- logic php -->
            @php
                $siswaExists = null;
                if (Auth::user()->role == 'siswa') {
                    $siswaExists = \App\Models\Siswa::where('user_id', Auth::user()->id)->exists();
                }

                $user = Auth::user();
                $isSiswa = $user->role === 'siswa';
                $disableKelas = $isSiswa && !$siswaExists;
                $isRole = $user->role;

                // page user
                if($isRole === 'admin') {
                    $userRoute = route('admin.user');
                } elseif($isRole === 'ketua_kelas') {
                    $userRoute = route('ketua_kelas.user');
                }

                // page kelas
                if($isRole === 'admin') {
                    $kelasRoute = route('admin.kelas');
                } elseif($isRole === 'ketua_kelas') {
                    $kelasRoute = route('ketua_kelas.kelas');
                } elseif($isRole === 'bendahara') {
                    $kelasRoute = route('bendahara.kelas');
                } elseif($isRole === 'siswa') {
                    $kelasRoute = route('siswa.kelas');
                }

                // page siswa
                if($isRole === 'admin') {
                    $siswaRoute = route('admin.siswa');
                } elseif($isRole === 'ketua_kelas') {
                    $siswaRoute = route('ketua_kelas.siswa');
                } elseif($isRole === 'bendahara') {
                    $siswaRoute = route('bendahara.siswa');
                } elseif($isRole === 'siswa') {
                    $siswaRoute = route('siswa.siswa');
                }

                // page TODOS
                if($isRole === 'admin') {
                    $todosRoute = route('admin.todos');
                } elseif($isRole === 'ketua_kelas') {
                    $todosRoute = route('ketua_kelas.todos');
                } elseif($isRole === 'bendahara') {
                    $todosRoute = route('bendahara.todos');
                } elseif($isRole === 'siswa') {
                    $todosRoute = route('siswa.todos');
                }


            @endphp

            <ul class="pc-navbar">
                <!-- PAGE User -->
                <li class="pc-item pc-caption"><label>Halaman</label></li>
                @if (Auth::user()->role == 'admin' || Auth::user()->role == 'ketua_kelas')
                    <li
                        class="pc-item {{ URL::current() == route('admin.user') ? 'active' : '' }}">
                        <a href="{{ $userRoute }}" class="pc-link"><span class="pc-micon">
                                <svg class="pc-icon">
                                    <use xlink:href="#custom-user"></use>
                                </svg></span><span class="pc-mtext">Users</span></a>
                    </li>
                @endif

                <!-- PAGE KELAS -->
                <li class="pc-item">
                    <a href="{{ $disableKelas ? '#' : $kelasRoute }}"
                        class="pc-link {{ $disableKelas ? 'disabled' : '' }}"
                        @if ($disableKelas)
                            onclick="return false;" style="opacity: 0.6; cursor: not-allowed;"
                        @endif
                    >
                        <span class="pc-micon">
                            <svg class="pc-icon">
                                <use xlink:href="#custom-fatrows"></use>
                            </svg>
                        </span>
                        <span class="pc-mtext">Kelas</span>
                    </a>
                </li>

                <!-- PAGE SISWA -->
                {{-- @if (Auth::user()->role != 'siswa') --}}
                    <li class="pc-item">
                        <a href="{{ $siswaRoute }}" class="pc-link"><span class="pc-micon"><svg class="pc-icon">
                                    <use xlink:href="#custom-user-square"></use>
                                </svg> </span><span class="pc-mtext">Siswa</span></a>
                    </li>
                {{-- @endif --}}
                <li class="pc-item">
                    <a href="{{ $todosRoute }}"
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

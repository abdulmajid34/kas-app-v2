<header class="pc-header">
    <div class="header-wrapper">
        <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled">
                <!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse">
                    <a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i class="ti ti-menu-2"></i></a>
                </li>
                <li class="pc-h-item pc-sidebar-popup">
                    <a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i class="ti ti-menu-2"></i></a>
                </li>
            </ul>
        </div>
        <!-- [Mobile Media Block end] -->
        <div class="ms-auto">
            <ul class="list-unstyled">
                <li class="dropdown pc-h-item">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false"><svg class="pc-icon">
                            <use xlink:href="#custom-sun-1"></use>
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
                        <a href="#!" class="dropdown-item" onclick="layout_change('dark')"><svg class="pc-icon">
                                <use xlink:href="#custom-moon"></use>
                            </svg>
                            <span>Dark</span> </a><a href="#!" class="dropdown-item"
                            onclick="layout_change('light')"><svg class="pc-icon">
                                <use xlink:href="#custom-sun-1"></use>
                            </svg>
                            <span>Light</span> </a><a href="#!" class="dropdown-item"
                            onclick="layout_change_default()"><svg class="pc-icon">
                                <use xlink:href="#custom-setting-2"></use>
                            </svg>
                            <span>Default</span></a>
                    </div>
                </li>
                <li class="dropdown pc-h-item header-user-profile">
                    <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img
                            src="/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" /></a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                style="max-height: calc(100vh - 225px)">
                                <div class="d-flex mb-1">
                                    <div class="flex-shrink-0">
                                        <img src="/assets/images/user/avatar-2.jpg" alt="user-image"
                                            class="user-avtar wid-35" />
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mt-2">{{ Auth::user()->nama_akun }} 🖖</h6>
                                        <small>{{ Auth::user()->username }} - {{ Auth::user()->role }}</small>
                                    </div>
                                </div>
                                <hr class="border-secondary border-opacity-50" />
                                <p class="text-span">Manage</p>
                                @php
                                    $siswaExists = null;
                                    if (Auth::user()->role == 'siswa') {
                                        $siswaExists = \App\Models\Siswa::where('user_id', Auth::user()->id)->exists();
                                    }
                                @endphp
                                <a href="{{ route('profile') }}"
                                    class="dropdown-item {{ Auth::user()->role == 'siswa' && !$siswaExists ? 'disabled' : '' }}"
                                    @if (Auth::user()->role == 'siswa' && !$siswaExists) onclick="return false;" style="opacity: 0.6; cursor: not-allowed;" @endif><span>
                                        <i class="ti ti-user"></i>
                                        <span>My Account</span>
                                    </span></a>
                                <a class="dropdown-item"><span><svg class="pc-icon text-muted me-2">
                                            <use xlink:href="#custom-lock-outline"></use>
                                        </svg>
                                        <span>Change Password</span></span></a>
                                <hr class="border-secondary border-opacity-50" />
                                <div class="d-grid mb-3">
                                    <button type="submit" class="btn btn-primary"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <svg class="pc-icon me-2">
                                            <use xlink:href="#custom-logout-1-outline"></use>
                                        </svg>Logout
                                        <form action="/logout" method="post" id="logout-form">
                                            @csrf
                                        </form>
                                    </button>
                                </div>
                            </div>
                        </div>
                </li>
            </ul>
        </div>
    </div>
</header>

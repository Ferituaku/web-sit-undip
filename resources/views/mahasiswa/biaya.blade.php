<aside class="sidebar bg-light vh-100 position-fixed shadow p-2 mb-5 bg-body-tertiary rounded" style="width: 250px; ">
        <div class="d-flex flex-column p-3 h-100">
            <a href="#" class="navbar-brand d-flex align-items-center mb-4">
                <img src="{{ asset('img/Universitas-Diponegoro-Semarang-Logo.png') }}" alt="logo" class="img-fluid" style="height: 50px; width: 50px;">
                <span class="fs-5 fw-bold ms-2 text-dark">SIT Undip</span>
            </a>
            <!-- Navigation Menu -->
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link active d-flex align-items-center">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-calendar me-2"></i>
                        Jadwal
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-laptop me-2"></i>
                        Kuliah Online
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-mortarboard me-2"></i>
                        Akademik
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-wallet2 me-2"></i>
                        Biaya Kuliah
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-file-earmark-text me-2"></i>
                        Her-Registrasi
                    </a>
                </li>
            </ul>
            <!-- Logout -->
            <div class="mt-auto">
                <a href="{{ route('logout') }}" class="nav-link text-danger d-flex align-items-center">
                    <i class="bi bi-box-arrow-right me-2"></i> Log Out
                </a>
            </div>
        </div>
    </aside>

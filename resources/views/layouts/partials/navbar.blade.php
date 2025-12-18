@include('layouts.partials.head')
<nav class="navbar navbar-custom navbar-expand-lg">
    <div class="container-fluid">
        <!-- Toggle button -->
        <button class="btn btn-dark shadow-none text-white me-3" id="sidebarToggle">
            ☰
        </button>

        <!-- Dynamic Page Title -->
        <span class="navbar-brand mb-0 h1 text-dark fw-semibold d-none d-md-inline">
            @yield('page-title', 'Dashboard')
        </span>

        <!-- User dropdown -->
        <div class="ms-auto d-flex align-items-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="d-none d-sm-inline mx-2 fw-medium">{{ session('usr_name') ?? 'User' }}</span>
                    <i class="bi bi-person-circle" style="font-size: 1.6rem;"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end shadow-sm" aria-labelledby="dropdownUser">
                    <li>
                        
                        <button class="btn" data-bs-toggle="modal" data-bs-target="#changePasswordModal">
                            Change Password
                        </button>

                        <!-- <a class="dropdown-item" type="button" id="openchangepassModal" data-bs-target="#changePasswordModal"><i class="bi bi-key-fill me-2"></i>Change Password</a> -->
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="{{ url('/logout') }}" method="POST" class="d-inline">
                            {{ csrf_field() }}
                            <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-2"></i>Sign Out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
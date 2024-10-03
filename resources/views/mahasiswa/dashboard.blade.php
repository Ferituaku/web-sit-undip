@extends('layout')
@section('title', 'Dashboard Mahasiswa')
@section('contentMhs')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<style>
    :root {
        --primary-color: #3498db;
        --secondary-color: #004cbaa8;
        --background-color: #f8f9fa;
        --card-background: #ffffff;
        --text-color: #333333;
        --sidebar-width: 250px;
    }

    body {
        background-color: var(--background-color);
        color: var(--text-color);
    }

    .sidebar {
        background-color: var(--secondary-color);
        color: #ffffff;
    }

    .sidebar .nav-link {
        color: #ffffff;
        transition: background-color 0.3s;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .card {
        background-color: var(--card-background);
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
</style>

@auth
<div class="d-flex">
    <!-- Sidebar -->
    <aside class="sidebar fixed-top vh-100 position-fixed shadow p-2 mb-5" style="width: var(--sidebar-width);">
        <div class="d-flex flex-column p-3 h-100">
            <a href="#" class="navbar-brand d-flex align-items-center mb-4 text-white">
                <img src="{{ asset('img/Universitas-Diponegoro-Semarang-Logo.png') }}" alt="logo" class="img-fluid" style="height: 40px; width: 40px;">
                <span class="fs-5 fw-bold ms-2">SIT Undip</span>
            </a>
            <!-- Navigation Menu -->
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item mb-2">
                    <a href="{{route('dashboard')}}" class="nav-link active d-flex align-items-center">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('jadwal')}}" class="nav-link text-light d-flex align-items-center">
                        <i class="bi bi-calendar me-2"></i>
                        Jadwal
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('kulon')}}" class="nav-link text-light d-flex align-items-center">
                        <i class="bi bi-laptop me-2"></i>
                        Kuliah Online
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('akademisi')}}" class="nav-link text-light d-flex align-items-center">
                        <i class="bi bi-mortarboard me-2"></i>
                        Akademisi
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('biaya')}}" class="nav-link text-light d-flex align-items-center">
                        <i class="bi bi-wallet2 me-2"></i>
                        Biaya Kuliah
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('herreg')}}" class="nav-link text-light d-flex align-items-center">
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

    <!-- Main Content -->
    <main class="flex-grow-1" style="margin-left: 260px;">
        <!-- Header -->
        <header class="fixed-top bg-white p-3 border-bottom shadow-sm" style="margin-left: 257px;">
            <div class="d-flex justify-content-end align-items-center">
                <div class="dropdown text-end">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2 text-dark">{{ auth()->user()->name }}</span>
                        <img src="{{ asset('img/pakvinsen.jpeg') }}" alt="user" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser">
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Keluar</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <div class="container-fluid py-4" style="margin-top: 50px; margin-left:10px">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Dashboard Mahasiswa</li>
                </ol>
            </nav>
            <div class="row g-4">
                <!-- User Info Card -->
                <div class="col-md-8">
                    <div class="card h-100" style="border:none; border-radius: 1rem; background: hsla(0, 0%, 100%, 1);

background: linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);

background: -moz-linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);

background: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);">
                        <div class=" row card-body">
                            <div class="col-sm-4">
                                <img src="{{ asset('img/pakvinsen.jpeg') }}" alt="avatar" class="rounded-circle img-fluid mb-3" style="width: 200px; margin:2rem">
                            </div>
                            <div class="col-sm-4" style="margin-left:4rem; margin-top: 3.5rem;">
                                <h4>{{ auth()->user()->name }}</h4>
                                <p class="text-light mb-1">{{ auth()->user()->email }}</p>
                                <p class="text-light mb-1">NIM: 242345678000</p>
                                <p class="text-light mb-1">No. Telp: (098) 765-4321</p>
                                <p class="text-light mb-0">Alamat: Pandeglang, Banten</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Calendar Card -->
                <div class="col-md-4">
                    <div class="card h-100" style="border:none; border-radius: 1rem; background: hsla(0, 0%, 100%, 1);

background: linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);

background: -moz-linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);

background: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);


">
                        <div class="card-body">
                            <div id="calendar" style="width: 345px; height: 240px;">
                                <table class="table-condensed table-bordered table-striped" style="width: 100%; height: 100%;">
                                    <thead>
                                        <tr>
                                            <th colspan="7">
                                                <span class="btn-group">
                                                    <a class="btn"><i class="icon-chevron-left"></i></a>
                                                    <a class="btn active" style="padding:2px 80px 2px 80px;">February 2012</a>
                                                    <a class="btn"><i class="icon-chevron-right"></i></a>
                                                </span>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>Su</th>
                                            <th>Mo</th>
                                            <th>Tu</th>
                                            <th>We</th>
                                            <th>Th</th>
                                            <th>Fr</th>
                                            <th>Sa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="muted">29</td>
                                            <td class="muted">30</td>
                                            <td class="muted">31</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td class="btn-primary"><strong>20</strong></td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td class="muted">1</td>
                                            <td class="muted">2</td>
                                            <td class="muted">3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Academic Status Card -->
                <div class="col-md-8">
                    <div class="card" style="border:none;  border-radius: 1rem; background: hsla(0, 0%, 100%, 1);

background: linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);

background: -moz-linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);

background: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);


">
                        <div class="card-body text-center mb-2">
                            <h2 class="mb-4">Status Akademik</h2>
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Semester Akademik Sekarang</h5>
                                    <p>2024/2025 Ganjil</p>
                                </div>
                                <div class="col-md-4">
                                    <h5>Semester</h5>
                                    <p>5</p>
                                </div>
                                <div class="col-md-4">
                                    <h5>Status</h5>
                                    <span class="badge bg-success">AKTIF</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GPA and Credits Card -->
                <div class="col-md-4">
                    <div class="card" style="border:none; border-radius: 1rem; background: hsla(0, 0%, 100%, 1);

background: linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);

background: -moz-linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);

background: -webkit-linear-gradient(45deg, hsla(0, 0%, 100%, 1) 0%, hsla(209, 100%, 89%, 1) 14%, hsla(217, 100%, 66%, 1) 49%);


">
                        <div class="card-body text-center">
                            <h4 class="mb-1">IPK</h4>
                            <p class="h2 mb-2">3.9</p>
                            <h4 class="mb-1">SKS</h4>
                            <p class="h2">86</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </main>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize the calendar (you may want to use a library like FullCalendar)
        // This is a placeholder for calendar initialization
        console.log('Calendar should be initialized here');
    });
</script>
@endauth
@endsection
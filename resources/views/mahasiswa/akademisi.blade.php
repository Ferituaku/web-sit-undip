@extends('layout')
@section('title', 'Home Page')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@auth
<div class="d-flex">
    <!-- Sidebar -->
    <aside class="sidebar bg-light vh-100 position-fixed shadow p-2 mb-5 bg-body-tertiary rounded" style="width: 250px; ">
        <div class="d-flex flex-column p-3 h-100">
            <a href="#" class="navbar-brand d-flex align-items-center mb-4">
                <img src="{{ asset('img/Universitas-Diponegoro-Semarang-Logo.png') }}" alt="logo" class="img-fluid" style="height: 50px; width: 50px;">
                <span class="fs-5 fw-bold ms-2 text-dark">SIT Undip</span>
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
                    <a href="{{route('jadwal')}}" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-calendar me-2"></i>
                        Jadwal
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('kulon')}}" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-laptop me-2"></i>
                        Kuliah Online
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('akademisi')}}" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-mortarboard me-2"></i>
                        Akademisi
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('biaya')}}" class="nav-link text-muted d-flex align-items-center">
                        <i class="bi bi-wallet2 me-2"></i>
                        Biaya Kuliah
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a href="{{route('herreg')}}" class="nav-link text-muted d-flex align-items-center">
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
    <main class="flex-grow-1" style="margin-left: 255px;">
        <!-- Header -->
        <header class="bg-white p-3 border-bottom fixed-top" style="margin-left: 263px;">
            <div class="d-flex justify-content-end align-items-center">
                <div class="dropdown text-end flex flex-row items-center ms-auto justify-end gap-2">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2">{{ auth()->user()->name }}</span>
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
    </main>

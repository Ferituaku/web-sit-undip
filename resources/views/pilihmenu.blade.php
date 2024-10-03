@extends('layout')
@section('title', 'Menu Pilih')
@section('contentpilih')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.min.css" rel="stylesheet" />


@auth
<section class="vh-100 background w-full" style="background-image: url('/img/back-ground-log-sign.jpg'); background-size: cover; background-position: center;">
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center align-items-center w-100">
            <div class="card text-white col-12 col-md-8 col-lg-6" style="border:none; border-radius: 1rem; backdrop-filter: blur(10px); background: rgba(67, 126, 255, 0.5);">
                <div class="card-body text-center">
                    <h1>Selamat Datang!</h1>
                    <div>Anda ingin Masuk Sebagai:</div>
                    <div class="d-grid gap-2 d-md-block mt-4">
                        @if(Auth::user()->role == 'dekan')
                        <button class="btn btn-outline-light btn-rounded" data-mdb-ripple-init data-mdb-ripple-color="dark" type="button">
                            <a href="{{ route('dosen.dashboard') }}" class="nav-link d-flex align-items-center text-light">Menu Dosen</a>
                        </button>
                        <button class="btn btn-outline-light btn-rounded" data-mdb-ripple-init data-mdb-ripple-color="dark" type="button">
                            <a href="{{ route('dekan.dashboard') }}" class="nav-link d-flex align-items-center text-light">Menu Dekan</a>
                        </button>
                        @elseif(Auth::user()->role == 'kaprodi')
                        <button class="btn btn-outline-light btn-rounded" data-mdb-ripple-init data-mdb-ripple-color="dark" type="button">
                            <a href="{{ route('dosen.dashboard') }}" class="nav-link d-flex align-items-center text-light">Menu Dosen</a>
                        </button>
                        <button class="btn btn-outline-light btn-rounded" data-mdb-ripple-init data-mdb-ripple-color="dark" type="button">
                            <a href="{{ route('kaprodi.dashboard') }}" class="nav-link d-flex align-items-center text-light">Menu Kaprodi</a>
                        </button>
                        @endif
                    </div>
                </div>
                <div class="align-items-center mt-4">
                    <a href="/logout" class="btn btn-sm btn-danger align-items-center mt-4">Logout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endauth
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.0.0/mdb.umd.min.js"></script>
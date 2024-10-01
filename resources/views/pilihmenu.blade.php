@extends('layout')
@section('title', 'Menu Pilih')
@section('contentpilih')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">


@auth
<div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
    <h1>Halo!!</h1>
    <div>Anda ingin Masuk Sebagai:</div>
    <div class="card mt-3">
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item mb-2">
                @if(Auth::user()->role == 'dekan' || Auth::user()->role == 'kaprodi')
                <a href="{{route('dashboard')}}" class="nav-link d-flex align-items-center">Menu Doswal</a>
            </li>
            <li class="nav-item mb-2">
                @elseif(Auth::user()->role == 'dekan')
                <a href="{{ route('dekan/dashboard') }}" class="nav-link d-flex align-items-center">Menu Dekan</a>
                @elseif(Auth::user()->role == 'kaprodi')
                <a href="{{ route('kaprodi/dashboard') }}" class="nav-link d-flex align-items-center">Menu Kaprodi</a>
                @endif
            </li>
        </ul>
    </div>
    <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>

</div>
@endauth
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
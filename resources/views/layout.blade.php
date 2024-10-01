<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
  <title>@yield('title', 'Webpage SIT')</title>
</head>

<body>
  <div class="container-fluid h-100">
    <div class="row h-100">
      @auth
      <!-- Content(dashboard dll) hanya muncul saat user login -->
      <div class="w-5 px-4 py-10 pt-6">
        @if (Auth::user()->role == 'mahasiswa')
        @yield('contentMhs')
        @elseif (Auth::user()->role == 'dosen')
        @yield('contentDsn')
        @elseif (Auth::user()->role == 'akademik')
        @yield('contentAkd')
        @elseif (Auth::user()->role == 'dekan')
        @yield('contentDkn')
        @elseif (Auth::user()->role == 'kaprodi')
        @yield('contentKpd')
        @endif
      </div>
      @else
      <!-- Main Content untuk user yang tidak login -->
      @yield('acontent')
      @endauth
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
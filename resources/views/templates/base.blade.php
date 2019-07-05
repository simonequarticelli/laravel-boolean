<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laravel-boolean @yield('titolo_pagina')</title>
    <!-- asset() => gestisce asset -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    {{-- includo header --}}
    @include ('templates._header');

    {{-- tutto il contenuto della pagina home  --}}
    <div class="home_container">
      @yield('content')
    </div>


  </body>
</html>

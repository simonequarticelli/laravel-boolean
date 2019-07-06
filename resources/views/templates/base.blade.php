<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>laravel-boolean @yield('titolo_pagina')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- asset() => gestisce asset -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>

    {{-- includo header --}}
    @include ('templates._header')

    {{-- tutto il contenuto della pagina home  --}}
    <div class="home_container">
      @yield('content')
    </div>

    {{-- includo footer --}}
    @include ('templates._footer')

    {{-- includo helper --}}
    @include ('templates._helper')

  </body>
</html>

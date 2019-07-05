{{-- richiamo il template base --}}
@extends('templates.base')

{{-- segnaposto titolo pagina --}}
@section('titolo_pagina')
  home
@endsection


@section('navbar')
  <nav>
    <div class="nav__logo">
      <a href="#"><img src="https://www.boolean.careers/images/common/logo.png" alt="logo boolean"></a>
    </div>
    <div class="nav__menu">
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">CORSO</a></li>
        <li><a href="#">METODO</a></li>
        <li><a href="#">DOPO IL CORSO</a></li>
        <li><a href="#">LEZIONE GRATUITA</a></li>
        <button type="button" name="button"><a href="#">Iscriviti</a></button>
      </ul>
    </div>
  </nav>
@endsection

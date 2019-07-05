@extends('templates.base')

@section('titolo_pagina')
  home
@endsection


@section('content')
  <nav>
    <div class="nav__logo">
      <img src="https://www.boolean.careers/images/common/logo.png" alt="logo boolean">
    </div>
    <div class="nav__menu">
      <ul>
        <li><a href="#"></a>HOME</li>
        <li><a href="#"></a>CORSO</li>
        <li><a href="#"></a>METODO</li>
        <li><a href="#"></a>DOPO IL CORSO</li>
        <li><a href="#"></a>LEZIONE GRATUITA</li>
      </ul>
      <button type="button" name="button">Iscriviti</button>
    </div>
  </nav>
@endsection

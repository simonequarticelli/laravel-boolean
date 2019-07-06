{{-- richiamo il template base --}}
@extends('templates.base')

{{-- segnaposto titolo pagina --}}
@section('titolo_pagina')
  home
@endsection

@section('content')
  <div class="container-fluid main_section mt-80">
    <div class="main_section_layout"></div>
    <div class="main_section_layout_2"></div>
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-6 main_section_content">
          <h1>Diventa sviluppatore web</h1>
          <p>6 mesi di <strong>corso intensivo online in diretta</strong> per imparare da zero il mestiere di web developer e <strong>trovare un nuovo lavoro</strong> nelle aziende top del settore</p>
          <button type="button" name="button"><a href="#">SCOPRI IL CORSO</a></button>
        </div>
        <div class="col-6 main_section_img">
          <img src="https://www.boolean.careers/images/common/mac2x.png" alt="immagine computer">
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid main_section_extend">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h2 class="mb-3">I nostri studenti sono stati assunti da</h2>
        </div>
        <div class="col-12">
          <img src="https://www.boolean.careers/images/partners/facile_it.png" alt="logo facile.it">
          <img src="https://www.boolean.careers/images/partners/oneday.png" alt="logo oneday">
          <img src="https://www.boolean.careers/images/partners/cayenne.png" alt="logo cayenne">
          <img src="https://www.boolean.careers/images/partners/softec.png" alt="logo softec">
          <img src="https://www.boolean.careers/images/partners/fabbrica_digitale.png" alt="log fabbrica digitale">
        </div>
      </div>
    </div>
  </div>
@endsection

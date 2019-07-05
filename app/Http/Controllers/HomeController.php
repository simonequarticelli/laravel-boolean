<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){

    //passare dati alla view $data = []
    //includerlo in html {{ $data }} <-- blade
    //compact('dato') si usa con un dato

    return view('home.index');
  }
}

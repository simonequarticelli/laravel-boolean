<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
  public function index(){

    //passare dati alla view $data = []
    //includerlo in html {{ $data }} <-- blade
    //compact('dato') si usa con un dato

    return view('static_page.index');
  }

  public function privacy(){
    return view('static_page.privacy_policy');
  }
  
}

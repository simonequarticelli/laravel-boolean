<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('prova', function(){
//   echo 'ciao';
// });

//si inserisce solo lo -->slug<--
//rotta alla home
Route::get('/', 'StaticController@index')->name('homepage');
Route::get('/static_page.privacy_policy', 'StaticController@privacy')->name('policy');
Route::get('/static_page.lavora_con_noi', 'StaticController@lavora')->name('lavora');

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

Route::get('/', function () {
    return view('home');
});

Route::get('/assistentesSociais', function () {
    return view('assistentes_sociais.index');
});

Route::get('/estoque', function () {
    return view('estoque.index');
});

Route::get('/scfv', function () {
    return view('scfv.index');
});

Route::get('/recursosHumanos', function () {
    return view('recursos_humanos.index');
});

Route::get('/recepcao', function () {
    return view('recepcao.index');
});

Route::get('/referenciados', function () {
    return view('referenciados.index');
});

//Route::resource('assistentes_sociais', 'AssistentesSociaisController');
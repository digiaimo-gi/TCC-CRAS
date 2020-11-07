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


//GRUPO RH
Route::get('/recursosHumanos', function () {
    return view('recursos_humanos.index');
});

Route::get('/recursosHumanos', 'RecursosHumanosController@index');
Route::get('/recursosHumanos/create', 'RecursosHumanosController@create');
Route::post('/recursosHumanos/store', 'RecursosHumanosController@store');
Route::get('/recursosHumanos/{id}/edit', 'RecursosHumanosController@edit');
Route::put('/recursosHumanos/{id}', 'RecursosHumanosController@update');
Route::delete('/recursosHumanos/{id}', 'RecursosHumanosController@destroy');

Route::get('/recursosHumanos/ficha/{id}', 'RecursosHumanosController@ficha');

//GRUPO RECEPÇÃO
Route::get('/recepcao', function () {
    return view('recepcao.index');
});
Route::get('/recepcao/agendamentos', function (){
    return view('recepcao.agendamentos');
});

Route::get('/referenciados', 'ReferenciadoController@index');
Route::get('/referenciados/create', 'ReferenciadoController@create');
Route::post('/referenciados/store', 'ReferenciadoController@store');
Route::get('/referenciados/{id}/edit', 'ReferenciadoController@edit');
Route::put('/referenciados/{id}', 'ReferenciadoController@update');
Route::delete('/referenciados/{id}', 'ReferenciadoController@destroy');

Route::get('/referenciados/ficha/{id}', 'ReferenciadoController@ficha');
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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/paciente', 'PacienteController@index')->name('paciente');
Route::get('/paciente/search', 'PacienteController@search')->name('search.paciente');

Route::get('/comunicacao/buscar/{search}','ComunicacaoController@kidTestSearch')->name('comunicacao.search');

Route::get('/buscarExame', function () {
    return view('buscarExame');
})->name('buscarExame');

Route::get('/cadastroExame', function () {
    return view('cadastroExame');
})->name('cadastroExame');

Route::get('/cadastroVacina', function () {
    return view('cadastroVacina');
})->name('cadastroVacina');

Route::get('/encaminhamento', function () {
    return view('encaminhamento');
})->name('encaminhamento');

Route::get('/recados', function () {
    return view('recados');
})->name('recados');

Route::get('/comunicacao', function () {
    return view('comunicacao');
})->name('comunicacao');

Route::get('/inicio', 'InicioController@index')->name('inicio');

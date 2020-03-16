<?php

use Illuminate\Support\Facades\Route;

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
})
->name('home');


Route::get('/catalogo', 'CategoriaController@index')
->name('catalogo')
;

Route::get('anime/', 'AnimeController@index')
->name('animes.lista')
;

Route::get('/autor', 'CriadoresController@index')
->name('autor.lista')
;

Route::get('/cadastro', 'AnimeController@create') 
->name('cadastro.animes')  
;

Route::post('/cadastro', 'AnimeController@store') 
->name('inserir.anime') 
;

Route::get('/cadastroAutor', 'CriadoresController@create') 
->name('inserir.autor') 
;
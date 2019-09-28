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




Route::get('contatos', 'Contato\contatoController@lista');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produto/index', 'ProdutoController@index')->name('produto.index');
Route::get('/produto/create', 'ProdutoController@create')->name('produto.create');
Route::post('/produto/store', 'ProdutoController@store')->name('produto.store');
Route::get('/produto/delete', 'ProdutoController@delete')->name('produto.delete');
Route::get('/produto/edit', 'ProdutoController@edit')->name('produto.edit');
Route::put('/produto/update', 'ProdutoController@update')->name('produto.update');


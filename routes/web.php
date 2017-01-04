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

Route::get('quem-somos', function() {
	return view('quem-somos');
});

Route::get('servicos', function() {
	return view('servicos');
});

Route::get('produtos', function() {
	return view('produtos');
});

Route::get('contato', function() {
	return view('contato');
});

Route::resource('admin/produtos', 'ProdutoController');

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/admin', 'AdminController@index');

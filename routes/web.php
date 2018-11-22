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
    return view('welcome');
});



Route::resource('clientes','clientesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Routes

Route::middleware(['auth'])->group(function() {
	
	//clientes
	Route::post('clientes/store', 'clientesController@store')->name('clientes.store')
		->middleware('permission:clientes.create');
	Route::get('clientes', 'clientesController@index')->name('clientes.index')
		->middleware('permission:clientes.index');
	Route::get('clientes/create', 'clientesController@create')->name('clientes.create')
		->middleware('permission:clientes.create');
	Route::put('clientes/{id}', 'clientesController@update')->name('clientes.update')
		->middleware('permission:clientes.edit');
	Route::get('clientes/{id}', 'clientesController@show')->name('clientes.show')
		->middleware('permission:clientes.show');
	Route::get('clientes/{id}/edit', 'clientesController@edit')->name('clientes.edit')
		->middleware('permission:clientes.edit');
	

	


});
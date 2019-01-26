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


Route::resource('empresa','empresaController');
Route::resource('clientes','clientesController');
Route::resource('users','userController');

Route::get("/createEmp/{id}","clientesController@createEmp");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Routes

Route::middleware(['auth'])->group(function() {
	
	//Roles
	Route::post('roles/store', 'RoleController@store')->name('roles.store')
		->middleware('permission:roles.create');
	Route::get('roles', 'RoleController@index')->name('roles.index')
		->middleware('permission:roles.index');
	Route::get('roles/create', 'RoleController@create')->name('roles.create')
		->middleware('permission:roles.create');
	Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
		->middleware('permission:roles.edit');
	Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
		->middleware('permission:roles.show');
	Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
		->middleware('permission:roles.edit');

	//Users
	Route::post('users/store', 'userController@store')->name('users.store')
		->middleware('permission:users.create');
	Route::get('users', 'userController@index')->name('users.index')
		->middleware('permission:users.index');
	Route::get('users/create', 'userController@create')->name('users.create')
		->middleware('permission:users.create');
	Route::put('users/{id}', 'userController@update')->name('users.update')
		->middleware('permission:users.edit');
	Route::get('users/{id}', 'userController@show')->name('users.show')
		->middleware('permission:users.show');
	Route::get('users/{id}/edit', 'userController@edit')->name('users.edit')
		->middleware('permission:users.edit');

//clientes
	Route::post('clientes/store', 'clientesController@store')->name('clientes.store')
		->middleware('permission:Clientes.create');
	Route::get('clientes', 'clientesController@index')->name('clientes.index')
		->middleware('permission:Clientes.index');
	Route::get('clientes/create', 'clientesController@create')->name('clientes.create')
		->middleware('permission:Clientes.create');
	Route::put('clientes/{id}', 'clientesController@update')->name('clientes.update')
		->middleware('permission:Clientes.edit');
	Route::get('clientes/{id}', 'clientesController@show')->name('clientes.show')
		->middleware('permission:Clientes.show');
	Route::get('clientes/{id}/edit', 'clientesController@edit')->name('clientes.edit')
		->middleware('permission:Clientes.edit');
	
	//empresas
	Route::post('empresa/store', 'empresaController@store')->name('empresa.store')
		->middleware('permission:Empresas.create');
	Route::get('empresa', 'empresaController@index')->name('empresa.index')
		->middleware('permission:Empresas.index');
	Route::get('empresa/create', 'empresaController@create')->name('empresa.create')
		->middleware('permission:Empresas.create');
	Route::put('empresa/{id}', 'empresaController@update')->name('empresa.update')
		->middleware('permission:Empresas.edit');
	Route::get('empresa/{id}', 'empresaController@show')->name('empresa.show')
		->middleware('permission:Empresas.show');
	Route::get('empresa/{id}/edit', 'empresaController@edit')->name('empresa.edit')
		->middleware('permission:Empresas.edit');
	
});
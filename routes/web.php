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


Route::resource('configuracion','configuracionController');
Route::resource('empresa','empresaController');
Route::resource('clientes','clientesController');
Route::resource('users','userController');
Route::resource('pago','PagoController');
Route::resource('entidad','entidadController');
Route::resource('ciudad','ciudadController');
Route::resource('empleado_empresa','Empleado_empresaController');
Route::resource('sede','SedeController');

Route::get('/productos', function () {
    return view('productos');
});
Route::get('/nosotros', function () {
    return view('nosotros');
});
Route::get('/seguridad', function () {
    return view('seguridad');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/contacto', function () {
    return view('contacto');
});

Route::get("/contacto","contactoController@index")->name('contacto');

Route::post("/createEmp/{id}","clientesController@storeEmp")->name('storeEmp');





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
	Route::get('clientes/facturacion/{id}', 'clientesController@facturacion')->name('clientes.facturacion')
		->middleware('permission:Clientes.facturacion');
	Route::get('clientes/pagocaja/{id}', 'clientesController@pagocaja')->name('clientes.pagocaja')
		->middleware('permission:Clientes.pagocaja');

	//empleado_empresa
		Route::post('empleado_empresa/store', 'empleado_empresaController@store')->name('empleado_empresa.store')
		->middleware('permission:Empleado_empresa.create');
	Route::get('empleado_empresa', 'empleado_empresaController@index')->name('empleado_empresa.index')
		->middleware('permission:Empleado_empresa.index');
	Route::get('empleado_empresa/create', 'empleado_empresaController@create')->name('empleado_empresa.create')
		->middleware('permission:Empleado_empresa.create');
	Route::put('empleado_empresa/{id}', 'empleado_empresaController@update')->name('empleado_empresa.update')
		->middleware('permission:Empleado_empresa.edit');
	Route::get('empleado_empresa/{id}', 'empleado_empresaController@show')->name('empleado_empresa.show')
		->middleware('permission:Empleado_empresa.show');
	Route::get('empleado_empresa/{id}/edit', 'empleado_empresaController@edit')->name('empleado_empresa.edit')
		->middleware('permission:Empleado_empresa.edit');
	Route::get('empleado_empresa/destroy/{id}', 'empleado_empresaController@destroy')->name('empleado_empresa.destroy')
		->middleware('permission:Empleado_empresa.destroy');
	Route::get('empleado_empresa/facturacion/{id}', 'empleado_empresaController@facturacion')->name('empleado_empresa.facturacion')
		->middleware('permission:Empleado_empresa.facturacion');
	
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
	Route::get('empresa/pagocaja/{id}', 'empresaController@pagocaja')->name('empresa.pagocaja')
		->middleware('permission:Empresas.pagocaja');



	//Entidades
	Route::post('entidad/store', 'entidadController@store')->name('entidad.store')
		->middleware('permission:Entidades.create');
	Route::get('entidad', 'entidadController@index')->name('entidad.index')
		->middleware('permission:Entidades.index');
	Route::get('entidad/create', 'entidadController@create')->name('entidad.create')
		->middleware('permission:Entidades.create');
	Route::put('entidad/{id}', 'entidadController@update')->name('entidad.update')
		->middleware('permission:Entidades.edit');
	Route::get('entidad/{id}', 'entidadController@show')->name('entidad.show')
		->middleware('permission:Entidades.show');
	Route::get('entidad/{id}/edit', 'entidadController@edit')->name('entidad.edit')
		->middleware('permission:Entidades.edit');

	//configuracion
	
	Route::post('configuracion/store', 'configuracionController@store')->name('configuracion.store')
		->middleware('permission:Configuracion.create');
	Route::get('configuracion/create', 'configuracionController@create')->name('configuracion.create')
		->middleware('permission:Configuracion.create');
	Route::get('configuracion', 'configuracionController@index')->name('configuracion.index')
		->middleware('permission:Configuracion.index');
	Route::put('configuracion/{id}', 'configuracionController@update')->name('configuracion.update')
		->middleware('permission:Configuracion.edit');
	Route::get('configuracion/{id}/edit', 'configuracionController@edit')->name('configuracion.edit')
		->middleware('permission:Configuracion.edit');

	//pagos
	Route::get('pago', 'pagoController@index')->name('pago.index')
		->middleware('permission:Pago.index'); 
	
});
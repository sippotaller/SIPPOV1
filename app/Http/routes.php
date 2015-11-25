<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('index');
});


$router->resource('Segmento', 'TSegmentoController');
$router->resource('Familia', 'TFamiliaController');
$router->resource('Clase', 'TClaseController');
$router->resource('TipoProducto', 'TTipoProductoController');
$router->controller('CatProducto', 'TCatProductoController',
					["getIndex"=>"CatProducto"
					,"getCreate"=>"CatProducto.create"
					,"postStore"=>"CatProducto.store"]);

$router->resource('Cuantia', 'TCuantiaController');
$router->resource('Cliente', 'CtaClienteController');
$router->resource('Cliente/CtaCliente', 'TCtaClienteController');
$router->resource('Marca', 'TMarcaController');




//$router->resource('Cliente', 'CtaClienteController');
//$router->resource('Cliente/CtaCliente', 'TCtaClienteController');
//$router->controller('Cliente/CatCliente', 'CatClienteController');
$router->resource('Usuario','UsersController');
$router->resource('AsignarPermisos','AsignarPermisosController');

$router->get('Cliente', function() {
 	$listaClientes=DB::table('listaClientes')->paginate(8);
	return view("Forms/Cliente",["personas"=>$listaClientes]);
});
Route::resource('Cliente/CtaCliente', 'TCtaClienteController');
Route::resource('Pedido', 'TPedidoController');
Route::resource('CatCliente', 'TCatClienteController');



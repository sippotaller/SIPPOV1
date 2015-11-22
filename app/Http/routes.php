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

$router->get('Producto', function() {
	return view("Forms/Producto");
});
$router->resource('Producto/Segmento', 'TSegmentoController');
$router->resource('Producto/Familia', 'TFamiliaController');
$router->resource('Producto/Clase', 'TClaseController');
$router->resource('Producto/TipoProducto', 'TTipoProductoController');
$router->resource('Producto/CatProducto', 'TCatProductoController');



$router->resource('Cliente', 'CtaClienteController');

// $router->controller('Cliente/Persona', 'PersonaController');
$router->resource('Cliente/CtaCliente', 'TCtaClienteController');
// $router->controller('Cliente/CatCliente', 'CatClienteController');
$router->resource('Usuario','UsersController');
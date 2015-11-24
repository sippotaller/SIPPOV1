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
	,"getCreate"=>"CatProducto.create"]);
$router->resource('Cuantia', 'TCuantiaController');
$router->resource('Cliente', 'CtaClienteController');
$router->resource('Cliente/CtaCliente', 'TCtaClienteController');






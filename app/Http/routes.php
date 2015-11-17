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
use App\model\TPersona;

Route::get('/', function () {
    return view('index');
});

$router->get('Producto', function() {
	return view("Forms/Producto");
});
$router->controller('Producto/Segmento', 'TSegmentoController');
$router->controller('Producto/Familia', 'TFamiliaController');
$router->controller('Producto/Clase', 'TClaseController');
$router->controller('Producto/TipoProducto', 'TTipoProductoController');
$router->controller('Producto/CatProducto', 'TCatProductoController');


$router->get('Cliente', function() {
 	$personas=TPersona::paginate(2);
	return view("Forms/Cliente",["personas"=>$personas]);
});

// $router->controller('Cliente/Persona', 'PersonaController');
$router->resource('Cliente/CtaCliente', 'TCtaClienteController');
// $router->controller('Cliente/CatCliente', 'CatClienteController');
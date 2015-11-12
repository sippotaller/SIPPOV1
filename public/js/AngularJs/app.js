(function () {

  var app = angular.module('sippo', [
    'ngRoute',
    'sippo.controllers'
  ]);

  app.config(['$routeProvider', function ($routeProvider) {

    $routeProvider
      .when('/cliente', {
        templateUrl: 'Views/Cliente.html',
        controller: ''
      })
      .when('/catalogoproductos', {
        templateUrl: 'Views/Producto.html',
        controller: ''
      })
      .when('/nuevoproducto', {
        templateUrl: 'Views/NuevoProducto.html',
        controller: ''
      })
      .when('/catalogoclientes', {
        templateUrl: 'Views/CatalogoClientes.html',
        controller: ''
      })
      .when('/catalogoproveedores', {
        templateUrl: 'Views/CatalogoProveedores.html',
        controller: ''
      })
      .when('/formapago', {
        templateUrl: 'Views/FormaPago.html',
        controller: ''
      })
      .when('/usuarios', {
        templateUrl: 'Views/Usuario.html',
        controller: ''
      })
      .when('/asignarpermisos', {
        templateUrl: 'Views/AsignarPermisos.html',
        controller: ''
      })
      .when('/nuevocliente', {
        templateUrl: 'Views/NuevoCliente.html',
        controller: ''
      })
      .when('/nuevousuario', {
        templateUrl: 'Views/NuevoUsuario.html',
        controller: ''
      })
      .when('/ventas', {
        templateUrl: 'Views/Ventas.html',
        controller: ''
      })
      .when('/pedidos', {
        templateUrl: 'Views/pedidos.html',
        controller: ''
      })
      .when('/pedidos/:idpedido', {
        templateUrl: 'Views/DetallePedido.html',
        controller: 'pedidosController'
      })
      .when('/', {
        templateUrl: 'Views/Home.html',
        controller: ''
      });

  }]);

})();

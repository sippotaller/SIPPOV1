
(function(_){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('sippo.controllers', [])
		.controller('pedidosController', ['$scope','$routeParams', function ($routeParams,$scope) {
			var idpedido=$routeParams.idpedido;
			$scope.nombre="hola mundo";
		}]);
})(_);
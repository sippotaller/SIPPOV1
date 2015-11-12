(function () {

  angular.module('sippo.directives', [])
    .directive('pokemonName', function () {
      return {
        restrict: 'E',
        templateUrl: 'partials/pokemon-name.html'
      };
    })

    .directive('pokemonImage', function () {
      return {
        restrict: 'E',
        templateUrl: 'partials/pokemon-image.html'
      };
    })    

})();

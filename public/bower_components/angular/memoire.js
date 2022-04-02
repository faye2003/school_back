let app = angular.module('myApp', ['ngRoute']);

app.config(function ($routeProvider) {

    $routeProvider.when('/', {
        templateUrl : 'page/dashboard',
    });

    $routeProvider.when ('/eleves', {
        templateUrl : 'page/eleves',
    });

    $routeProvider.when ('/profs', {
        templateUrl : 'page/profs',
    });
    
    $routeProvider.when ('/disciplines', {
        templateUrl : 'page/disciplines',
    });

    $routeProvider.when ('/emplois', {
        templateUrl : 'page/emplois',
    });

    $routeProvider.when ('/niveau', {
        templateUrl : 'page/niveaux',
    });

    $routeProvider.when ('/notes', {
        templateUrl : 'page/notes',
    });

    $routeProvider.when ('/evaluations', {
        templateUrl : 'page/evaluations',
    });

    $routeProvider.when ('/sales', {
        templateUrl : 'page/sales',
    });

    $routeProvider.when ('/cours', {
        templateUrl : 'page/cours',
    });
});

app.controller('myController', ['$scope', function ($scope) {
    
}]);
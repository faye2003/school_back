let myApp = angular.module('myApp', ['ngRoute', 'ngCookies']);

myApp.config('$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {

    console.log('bonjour');
    $routeProvider.when('/', {
        templateUrl : 'page/login',
    });

    $routeProvider.when('/dashboard', {
        templateUrl : 'page/dashboard',
    });

    $routeProvider.when ('/eleve', {
        templateUrl : 'page/eleves',
    });

    $routeProvider.when ('/profs' {
        templateUrl : 'page/enseignants',
    });

    $routeProvider.when ('/notes', {
        templateUrl : 'page/notes',
    });

    $routeProvider.when ('/niveau', {
        templateUrl : 'page/niveau',
    });

    $routeProvider.when ('/sales', {
        templateUrl : 'page/sales',
    });

    $routeProvider.when ('/cours', {
        templateUrl : 'page/cours',
    });
});

myApp.controller('myController', ['$scope', function ($scope) {
    
}])
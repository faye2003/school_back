var app = angular.module('myApp', ['ngRoute', 'ngSanitize']);

app.factory('MyFactory', function ($http, $q)
{
    let factory = {
        data : false,
        getEleve:function (dataget=null) 
        {
            console.log("ici les eleves");
            let deferred = $q.defer();
            console.log(dataget);
            $http({
                method: 'GET',
                url: "graphql?query={eleves{id, nom, prenom, telephone, classe, age, sexe, moyenne}}",
                header: {
                    'contentType' : 'application/graphql',
                },
                data: dataget
            }).then(function successCallback(response)
            {
                factory.data = response['data']['eleves'];
                console.log(response['data']);
                deferred.resolve(factory.data);
            },function errorCallback(error) {
                console.log('Erreur serveur', error);
                deferred.reject("Erreur veuillez contactez le support technique!");
            });
            console.log(deferred.promise);
            return deferred.promise;
        },
        getProfesseur:function (element, is_graphQL=true, dataget=null)
        {
            let deferred = $q.defer();
            console.log(dataget);
            $http({
                method:'GET',
                url: '//'+location.host+'/memoire_back/public/'+ (is_graphQL ? '/graphql?query={enseignants{id,nom,prenom,email,telephone,adresse,sexe,discipline}}':element),
                headers: {
                    'contentType' : 'application/graphql',
                },
                data:dataget
            }).then(function successCallback(response)
            {
                if (is_graphQL) {
                    factory.data = response['data']['enseignants'];
                    console.log(response['data']);
                }else {
                    factory.data = response['data'];
                }
                deferred.resolve(factory.data);
            },function errorCallback(error) {
                console.log('Erreur serveur',error);
                deferred.reject("Erreur veuillez contacter le support technique!");
            });
            return deferred.promise;
        }
    };
    return factory;
});



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

app.controller('MyController', function ($scope, MyFactory) {
    console.log("ici controller");
    $scope.eleves = MyFactory.getEleve();
    $scope.enseignants = MyFactory.getProfesseur();

    $scope.showFilter = false;

    $scope.myFunctionFilter =  function ()
    {
        console.log("ici ma fonction");
        $scope.showFilter = $scope.showFilter ? false : true;
    }
});

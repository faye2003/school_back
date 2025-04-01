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
                headers: {
                    'contentType' : 'application/graphql',
                },
                data: dataget
            }).then(function successCallback(response)
            {
                factory.data = response['data']['data']['eleves'];
                console.log(response['data']);
                deferred.resolve(factory.data);
            },function errorCallback(error) {
                console.log('Erreur serveur', error);
                deferred.reject("Erreur veuillez contactez le support technique!");
            });
            console.log(deferred.promise);
            return deferred.promise;
        },
        getProfesseur:function (dataget=null)
        {
            let deferred = $q.defer();
            console.log(dataget);
            $http({
                method:'GET',
                url: "graphql?query={enseignants{id,nom,prenom,email,telephone,sexe,adresse,discipline}}",
                headers: {
                    'contentType' : 'application/graphql',
                },
                data:dataget
            }).then(function successCallback(response)
            {
                factory.data = response['data']['data']['enseignants'];
                console.log(response['data']);
                deferred.resolve(factory.data);
            },function errorCallback(error) {
                console.log('Erreur serveur',error);
                deferred.reject("Erreur veuillez contacter le support technique!");
            });
            return deferred.promise;
        },
        getDiscipline: function (dataget=null) 
        {
            let deferred = $q.defer();
            console.log(dataget);
            $http({
                method: 'GET',
                url: "graphql?query={disciplines{id,designation,description,sigle,coefficient}}",
                headers: {
                    'contentType' : 'application/graphql',
                },
                data: dataget
            }).then(function successCallback(response) 
            {
                factory.data = response['data']['data']['disciplines'];
                console.log(response['data']);
                deferred.resolve(factory.data);
            },function errorCallback(error) {
                console.log('Erreur serveur', error);
                deferred.reject('Erreur veuillez contacter le support technique!');
            });
            return deferred.promise;
        },
        getEmploi: function (dataget=null) 
        {
            let deferred = $q.defer();
            console.log(dataget);
            $http({
                method: 'GET',
                url: "graphql?query={emplois{id,titre,description}}",
                headers: {
                    'contentType' : 'application/graphql',
                },
                data: dataget
            }).then(function successCallback(response) 
            {
                factory.data = response['data']['data']['emplois'];
                console.log(response['data']);
                deferred.resolve(factory.data);
            },function errorCallback(error) {
                console.log('Erreur serveur', error);
                deferred.reject('Erreur veuillez contacter le support technique!');
            });
            return deferred.promise;
        },
        getEvaluation: function (dataget=null) 
        {
            let deferred = $q.defer();
            console.log(dataget);
            $http({
                method: 'GET',
                url: "graphql?query={evaluations{id,designation,description,surveillant,duree,salle}}",
                headers: {
                    'contentType' : 'application/graphql',
                },
                data: dataget
            }).then(function successCallback(response) 
            {
                factory.data = response['data']['data']['evaluations'];
                console.log(response['data']);
                deferred.resolve(factory.data);
            },function errorCallback(error) {
                console.log('Erreur serveur', error);
                deferred.reject('Erreur veuillez contacter le support technique!');
            });
            return deferred.promise;
        },
        getDashboard: function (dataget=null) 
        {
            let deferred = $q.defer();
            console.log(dataget);
            $http({
                method: 'GET',
                url: "graphql?query={dashboards{nombre_eleves,nombre_profs,nombre_disciplines,nombre_cours,meilleur_eleves,taux_reussite,surveillants}}",
                headers: {
                    'contentType' : 'application/graphql',
                },
                data: dataget
            }).then(function successCallback(response) 
            {
                factory.data = response['data']['data']['dashboards'];
                console.log(response['data']);
                deferred.resolve(factory.data);
            },function errorCallback(error) {
                console.log('Erreur serveur', error);
                deferred.reject('Erreur veuillez contacter le support technique!');
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

    $routeProvider.when ('/niveaus', {
        templateUrl : 'page/niveaus',
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

app.controller('MyController', function ($scope, MyFactory, $http) {

    let v = MyFactory;
    v.getEleve().then(function (data) 
    {
        $scope.eleves = data;
    });
    v.getProfesseur().then(function (data)
    {
        $scope.enseignants = data;
    });
    v.getDiscipline().then(function (data)
    {
        $scope.disciplines = data;
    });
    v.getEmploi().then(function (data) 
    {
        $scope.emplois = data;
    });
    v.getEvaluation().then(function (data) 
    {
        console.log(data);
        $scope.evaluations = data;
        
    })


    $scope.showFilter = false;

    $scope.myFunctionFilter =  function ()
    {
        $scope.showFilter = $scope.showFilter ? false : true;
    }

    // https://stackoverflow.com/questions/25212135/angularjs-deleting-item-of-array-from-laravel-database
    $scope.removeEleve = function (item)
    {
        // Save index into variable
        var index = $scope.eleves.indexOf(item);
        if (index != -1) {
            // Remove eleve-item from array
            $scope.eleves.splice(index, 1);
        }
        // Now remove todo-items from laravel
        $http.delete('eleves/'+item.id);
    }

    $scope.removeProf = function (item)
    {
        var index = $scope.enseignants.indexOf(item);
        if (index != -1) {
            $scope.enseignants.splice(index, 1);
        }
        $http.delete('profs/'+item.id);
    }

    $scope.removeDiscipline = function (item)
    {
        var index = $scope.disciplines.indexOf(item);
        if (index != -1) {
            $scope.disciplines.splice(index, 1);
        }
        $http.delete('discipline/'+item.id);
    }
});

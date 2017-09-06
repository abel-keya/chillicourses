var homeCtrl = angular.module('homeCtrl', []);

homeCtrl.controller('homeController', ['$scope', '$http', '$location', 'homeService', function ($scope, $http, $location, homeService) {
	$scope.signin = function() {
        homeService.signin(
            function(response){
                $location.path('/dashboard');
            },
            function(response){
                alert('Something went wrong with the sign in process. Try again later!');
            }
        );
    }

    if(homeService.checkIfSignedIn())
        $location.path('/');
	
}]);
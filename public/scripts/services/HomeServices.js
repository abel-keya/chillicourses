var homeServices = angular.module('homeServices', ['LocalStorageModule']);

homeServices.factory('homeService', ['$http', 'localStorageService', function($http, localStorageService) {

    function checkIfSignedIn() {

        if(localStorageService.get('token'))
            return true;
        else
            return false;

    }


    function signin(onSuccess, onError){

        $http.get('/api/auth/facebook')
        
        .then(function(response) {

            localStorageService.set('token', response.data.token);
            onSuccess(response);

        }, function(response) {

            onError(response);

        });

    }

    function signout(){

        localStorageService.remove('token');

    }

    function getCurrentToken(){
        return localStorageService.get('token');
    }

    return {
        checkIfSignedIn: checkIfSignedIn,
        signin: signin,
        signout: signout,
        getCurrentToken: getCurrentToken
    }

}]);
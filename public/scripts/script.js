
    // create the module and name it chilliApp
        // also include ngRoute for all our routing needs
    var chillicourses = angular.module('chillicourses', 
        [
            'ngRoute', 
            'angular-loading-bar', 
            'ngStorage',
            'LocalStorageModule',
            'homeServices', 
            'homeCtrl'
        ]);


    // configure our routes
    chillicourses.config(function($routeProvider, localStorageServiceProvider) {
        localStorageServiceProvider
            .setPrefix('chillicourses');
        $routeProvider

            // route for the home page
            .when('/', {
                templateUrl : 'pages/core/home.html',
                controller  : 'homeController'
            })

            // route for the dashboard page
            .when('/dashboard', {
                templateUrl : 'pages/core/dashboard/index.html'
            })

            // route for the about-us page
            .when('/about-us', {
                templateUrl : 'pages/core/about/index.html'
            })

            // route for the contact-us page
            .when('/contact-us', {
                templateUrl : 'pages/core/contact/index.html'
            })

            // route for the terms-and-conditions page
            .when('/terms-and-conditions', {
                templateUrl : 'pages/core/terms/index.html'
            })

            // route for the privacy-policy page
            .when('/privacy-policy', {
                templateUrl : 'pages/core/policy/index.html'
            })

            // route for the enroll page
            .when('/enroll', {
                templateUrl : 'pages/core/enroll/index.html'
            })

            // route for the course page
            .when('/course', {
                templateUrl : 'pages/core/course/topic/core/index.html'
            })

            // route for the edit course page
            .when('/course/edit', {
                templateUrl : 'pages/core/course/core/edit/index.html'
            })

            // route for the delete course page
            .when('/course/delete', {
                templateUrl : 'pages/core/course/core/delete/index.html'
            })

            // route for the class page
            .when('/class', {
                templateUrl : 'pages/core/course/class/core/index.html'
            })

            // route for the create class page
            .when('/class/create', {
                templateUrl : 'pages/core/course/class/new/index.html'
            })

            // route for the edit class page
            .when('/class/edit', {
                templateUrl : 'pages/core/course/class/edit/index.html'
            })

            // route for the delete class page
            .when('/class/delete', {
                templateUrl : 'pages/core/course/class/delete/index.html'
            })

            // route for the quiz page
            .when('/quiz', {
                templateUrl : 'pages/core/course/quiz/core/index.html'
            })

            // route for the quiz edit page
            .when('/question/edit', {
                templateUrl : 'pages/core/course/quiz/edit/index.html'
            })

            // route for the quiz create page
            .when('/question/create', {
                templateUrl : 'pages/core/course/quiz/new/index.html'
            })

            // route for the quiz delete page
            .when('/question/delete', {
                templateUrl : 'pages/core/course/quiz/delete/index.html'
            })

            // route for the quiz page
            .when('/results', {
                templateUrl : 'pages/core/course/quiz/results/index.html'
            })

            // route for the assignment page
            .when('/assignment', {
                templateUrl : 'pages/core/course/assignment/core/index.html'
            })

            // route for the assignment edit page
            .when('/assignment/edit', {
                templateUrl : 'pages/core/course/assignment/edit/index.html'
            })

            // route for the assignment create page
            .when('/assignment/create', {
                templateUrl : 'pages/core/course/assignment/new/index.html'
            })

            // route for the assignment delete page
            .when('/assignment/delete', {
                templateUrl : 'pages/core/course/assignment/delete/index.html'
            })

            // route for the assignment page
            .when('/assignment/result', {
                templateUrl : 'pages/core/course/assignment/results/index.html'
            })

            // route for the create topic page
            .when('/topic/create', {
                templateUrl : 'pages/core/course/topic/new/index.html'
            })

            // route for the edit topic page
            .when('/topic/edit', {
                templateUrl : 'pages/core/course/topic/edit/index.html'
            })

            // route for the delete topic page
            .when('/topic/delete', {
                templateUrl : 'pages/core/course/topic/delete/index.html'
            })

            // route for the create topic page
            .when('/subtopic/create', {
                templateUrl : 'pages/core/course/subtopic/new/index.html'
            })

            // route for the edit topic page
            .when('/subtopic/edit', {
                templateUrl : 'pages/core/course/subtopic/edit/index.html'
            })

            // route for the delete topic page
            .when('/subtopic/delete', {
                templateUrl : 'pages/core/course/subtopic/delete/index.html'
            })

            // route for the delete topic page
            .when('/assignments', {
                templateUrl : 'pages/core/course/assignment/all/index.html'
            })

            // route for the delete topic page
            .when('/quizzes', {
                templateUrl : 'pages/core/course/quiz/all/index.html'
            })




            // route for the account page
            .when('/account', {
                templateUrl : 'pages/core/account/index.html'
            })

            .otherwise({
                redirectTo: '/'
            });

    }); 



    

    chillicourses.controller('HomeController', function($scope) {
        $scope.message = 'Hi, there!';
    });
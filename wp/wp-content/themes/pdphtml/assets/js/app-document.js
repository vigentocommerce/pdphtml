/* script.js */

// create the module and name it document_guide
var app = angular.module('document_guide', [ 'ngRoute' , 'angularUtils.directives.dirPagination' ]);

// configure our routes
app.config(function($routeProvider) {
	$routeProvider

		// route for the content1 page
		.when('/', {
			templateUrl : 'templates/pages/content2.html',
			controller  : 'mainController'
		})
		// route for the content2 page
		.when('/collapse1', {
			templateUrl : 'templates/pages/content2.html',
			controller  : 'mainController'
		})
		// route for the content2 page
		.when('/collapse2', {
			templateUrl : 'templates/pages/content1.html',
			controller  : 'mainController'
		})		
});

// create the controller and inject Angular's $scope
app.controller('mainController', function($scope) {});
//




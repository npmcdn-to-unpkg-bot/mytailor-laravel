	'use strict';

	app.controller("pagesController", ["$scope","pageFactory", 

		function($scope, pageFactory) {

			$scope.page = {};

			$scope.createPage = function(){
			 		 pageFactory.store($scope.page).then(function(response){
			 		 	console.log(response);
			 				$scope.message = response;
			 		});
			 	};

			 $scope.reset = function(){
			 	$scope.page = {};
			 };


	}]);

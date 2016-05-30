	'use strict';

	app.controller("shotsController", ["$scope","shotFactory", 

		function($scope, shotFactory) {

			$scope.show = function(id){
			 		 shotFactory.show(id).then(function(response){
			 				$scope.shot = response.data;
			 		});
			 	};

			$scope.updateShot = function(){
				shotFactory.update($scope.shot.id, $scope.shot).then(function(response){
			 		});
			 };

			 $scope.reset = function(){
			 	$scope.shot = {};
			 };


	}]);

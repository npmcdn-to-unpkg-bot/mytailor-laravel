	'use strict';

	app.controller("ovalController", ["$scope","shotFactory", "$timeout",

		function($scope, shotFactory, $timeout) {
			
			 		 shotFactory.show($scope.name).then(function(response){
			 				$scope.shot = response.data;
			 		});

			 		$timeout(function(){
			 		 	shotFactory.viewed($scope.name);
			 		 }, 1500);
		}

			]);
	

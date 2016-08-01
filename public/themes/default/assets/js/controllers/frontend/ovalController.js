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

		app.controller("shotController", ["$scope","shotFactory", "$timeout","$window",

		function($scope, shotFactory, $timeout, $window) {

					var $name = $window.location.href;

					$name = $name.substring($name.lastIndexOf('/')+1);

			 		$timeout(function(){
			 		 	shotFactory.viewed($name);
			 		 }, 1500);
		}

			]);
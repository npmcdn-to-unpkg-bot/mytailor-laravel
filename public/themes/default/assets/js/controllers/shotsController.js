	app.controller("shotsController", ["$scope","shots", 

		function($scope, shots) {

			 shots.get().then(function(response){
			 		$scope.shots = response;
			 });

			 $scope.show = function(id){
			 		 shots.show(id).then(function(response){
			 				$scope.shot = response.data;
			 				//console.log(response.data);
			 		});
			 		
			 					 	//console.log($scope.shot);
			 	}



	}]);

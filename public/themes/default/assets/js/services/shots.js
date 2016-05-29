	app.factory('shots', ['$http', function($http){

			// will return object of a single shot
			this.show = function (name) {
			  	return $http.get("/admin/shots/" + name);
			};

			this.get = function(){
				return $http.get("/admin/shots/");
			};
			return this;
	}]);

	// app.controller("ShotsController", function ($scope, $http, $location) {
	// 			  $scope.loadShotData = 
				  
	// 			  };

	// });


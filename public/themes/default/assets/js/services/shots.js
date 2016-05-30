	app.factory('shotFactory', ['$http', function($http){

			// will return object of a single shot
			this.show = function (name) {
			  	return $http.get("/admin/shots/" + name);
			};

			this.get = function(){
				return $http.get("/admin/shots/");
			};

			this.update = function(id, shot){
				return $http.put('/admin/shots/' + id, shot)
			};
			return this;
	}]);

	// app.controller("ShotsController", function ($scope, $http, $location) {
	// 			  $scope.loadShotData = 
				  
	// 			  };

	// });


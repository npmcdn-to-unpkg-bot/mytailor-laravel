	app.controller("ShotsController", function ($scope, $http, $location) {
				  $scope.loadShotData = function (name) {
				  	 $http.get("/admin/shots/" + name).then(function (response) {
					        	console.log(response.data);
					    });
				  
				  };

	});


	app.factory('shotFactory', ['$http', function($http){

			// will return object of a single shot
			this.show = function (name) {
			  	return $http.get("/shot/" + name);
			};

			this.viewed = function(name){
				return $http.post("/shot/viewed/" + name);
			};

			// this.update = function(id, shot){
			// 	return $http.put('/admin/shots/' + id, shot);
			// };

			// this.destroy = function(name){
			// 	return $http.delete('/admin/shots/' + name);
			// };

			return this;
	}]);

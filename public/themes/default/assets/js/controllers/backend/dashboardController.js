(function () {
   'use strict';


	app.controller("DashboardController", ["$scope","maFactory", "$timeout",

		function($scope, maFactory, $timeout) {

			// $scope.users_count = $scope.users.new_users.itemsPerPage;

			/**
			 * shows data about a single shot.
			 *
			 * @param id
			 *
             */
			$scope.ma_get_users = function(id){
			 		 maFactory.ma_get_users().then(function(response){
			 				$scope.users = response.data;

			 		});
			 	};

			$timeout(function(){

			 		 	$scope.ma_get_users();

			 		 }, 500);


			 }]);

})();
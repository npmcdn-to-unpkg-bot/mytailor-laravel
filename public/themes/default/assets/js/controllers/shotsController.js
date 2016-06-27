	'use strict';

	app.controller("shotsController", ["$scope","shotFactory", "ngDialog",

		function($scope, shotFactory, ngDialog) {

			$scope.show = function(id){
			 		 shotFactory.show(id).then(function(response){
			 				$scope.shot = response.data;

			 		});
			 	};

			$scope.updateShot = function(){
				shotFactory.update($scope.shot.id, $scope.shot).then(function(response){
    				// snackbar.create(response.data, 5000);
			 		});
			 };

			 $scope.reset = function(){
			 	$scope.shot = {};
			 };

			$scope.clickToOpen = function (id) {
    			ngDialog.open({ 
    				template: template_path + 'corp_template.html', className: 'mt-large-overlay' 
    			});

			};

			$scope.destroy = function () {
				shotFactory.destroy($scope.shot.file_name).then(function(response){

					angular.element(document.querySelector('.__active')).remove();

				});
			}

	}]);

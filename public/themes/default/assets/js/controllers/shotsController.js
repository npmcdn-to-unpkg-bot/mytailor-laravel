	'use strict';

	app.controller("shotsController", ["$scope","shotFactory", "ngDialog", '$window',

		function($scope, shotFactory, ngDialog, $window) {

			$scope.show = function(id){
			 		 shotFactory.show(id).then(function(response){
			 				$scope.shot = response.data;

			 		});
			 	};

			$scope.updateShot = function(){
				shotFactory.update($scope.shot.id, $scope.shot).then(function(response){
    				var data = response.data.data;
// snackbar.create(response.data, 5000);
								  'use strict';
								  var snackbarContainer = document.querySelector('#demo-snackbar-example');
								    var data = {
								      message: data.message,
								      timeout: 2000,
								      actionText: 'Undo'
								    };
								    snackbarContainer.MaterialSnackbar.showSnackbar(data);

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

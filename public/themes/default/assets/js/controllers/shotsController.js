(function () {
   'use strict';


	app.controller("shotsController", ["$scope","shotFactory", "ngDialog", '$window','tagFactory',

		function($scope, shotFactory, ngDialog, $window, tagFactory) {

			/**
			 * shows data about a single shot.
			 *
			 * @param id
			 *
             */
			$scope.show = function(id){
			 		 shotFactory.show(id).then(function(response){
			 				$scope.shot = response.data;

			 		});
			 	};

			/**
			 * returns all tags in storage.
			 *
			 * @return response object.
			 */

		 		tagFactory.show().then(function(response){
                    $scope.tagsList = response.data;

            /**
             * Updates a shot and responds with a snackbar.
             *
             */
			$scope.updateShot = function(){
				shotFactory.update($scope.shot.id, $scope.shot).then(function(response){
    				var responseData = response.data.data;
					  
					  	var snackbarContainer = document.querySelector('#demo-snackbar-example');
					    var data = {
					      			message: responseData.message,
					      			timeout: 2000,
					      			actionText: 'Undo'
					    		};
					    snackbarContainer.MaterialSnackbar.showSnackbar(data);
			 	});
			 };

            /**
             * Changes scope to an empty object
             *
             */
            $scope.reset = function(){
			 	$scope.shot = {};
			};

            /**
             *  Opens modal for viewing a shot.
             *
             * @param id
             */
			$scope.clickToOpen = function (id) {
    			ngDialog.open({ 
    				template: template_path + 'corp_template.html', className: 'mt-large-overlay' 
    			});

			};

            /**
             * deletes a shot item and responds with a snackbar.
             *
             */
                $scope.destroy = function () {
				shotFactory.destroy($scope.shot.file_name).then(function(response){

					angular.element(document.querySelector('.__active')).remove();

				});
			};


      });


		 		  $scope.tagTransform = function (newTag) {
    var item = {
        name: newTag,
        id: newTag
    };

    return item;
  };

        }]);

}());
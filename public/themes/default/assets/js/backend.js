// Here we declare our ng-app and modules we need
var app = angular.module('app', ['ngAnimate', 'ngMessages', 'ngSanitize', 'ui.select', 'ngDialog']);

var template_path = '/themes/default/views/segments/';

app.config(function (ngDialogProvider) {
    ngDialogProvider.setForceHtmlReload(true);
});

/*
 * @author Jobizzness@gmail.com
 * Application scripts
 *
 */




/*
 * Sidebar toggle
 *
 */
app.controller("MainController", function($scope, ngDialog, $location) {

    $location.search({id: '92938920', cat:'fm'});

    $scope.toggle = false;
    $scope.showForm = false;

    $scope.toggleSidebar = function () {
        $scope.toggle = !$scope.toggle;
    };

    $scope.regsign = function($q){
        history.pushState({}, '', '/'+$q);

        ngDialog.open({
            closeByNavigation: true,
            cache:false,
            template: template_path + $q+'.html', className: 'small-oval-theme' ,
            controller: 'authController',
            preCloseCallback: function() {
                history.back();
                return true;
            }
        }); //Dialog
    };


});

app.controller("authController", ["$scope",

    function($scope, $location) {

        $location.path('/').search({id: '92938920'});

        $scope.token = angular.element(document.getElementById('csrf')).val();

    }]);
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


        }]);

}());
	'use strict';

	app.controller("pagesController", ["$scope","pageFactory", 

		function($scope, pageFactory) {

			$scope.page = {};

			$scope.createPage = function(){
			 		 pageFactory.store($scope.page).then(function(response){
			 		 	console.log(response);
			 				$scope.message = response;
			 		});
			 	};

			 $scope.reset = function(){
			 	$scope.page = {};
			 };


	}]);


	app.factory('shotFactory', ['$http', function($http){

			// will return object of a single shot
			this.show = function (name) {
			  	return $http.get("/admin/shots/" + name);
			};

			this.get = function(){
				return $http.get("/admin/shots/");
			};

			this.update = function(id, shot){
				return $http.put('/admin/shots/' + id, shot);
			};

			this.destroy = function(name){
				return $http.delete('/admin/shots/' + name);
			};

			return this;
	}]);

	app.factory('tagFactory', ['$http', function($http){

			// will return object of a single shot
			this.show = function () {
			  	return $http.get("/admin/tags");
			};
			return this;
	}]);



	app.factory('pageFactory', ['$http', function($http){

			this.store = function(data){
				return $http.post('/admin/pages', data)
			};
			return this;
	}]);

//# sourceMappingURL=backend.js.map

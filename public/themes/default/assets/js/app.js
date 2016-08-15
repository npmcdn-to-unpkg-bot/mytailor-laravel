/*
 * @author Jobizzness@gmail.com
 * Application scripts
 *
 */



	// Here we declare our ng-app and modules we need
	var app = angular.module('app', ['ngAnimate', 'ngMessages', 'ngSanitize', 'ui.select', 'ngDialog', 'ngCookies']);

	var template_path = '/themes/default/views/segments/';

app.config(function (ngDialogProvider) {
    	ngDialogProvider.setForceHtmlReload(true);
	});

	/*
	 * Sidebar toggle
	 *
	 */
	app.controller("MainController", function($scope, ngDialog) {

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

	app.controller("authController", ["$scope","$http", "$cookies",

		function($scope, $http, $cookies) {

$scope.token = angular.element(document.getElementById('csrf')).val();
			 	// 	/**
		   //           * Updates a shot and responds with a snackbar.
		   //           *
		   //           */
					// $scope.login = function(){

					// 	$http.post('/login').then(function(response){
					// 			console.log(respone);
					// 	});

					//  };



	}]);

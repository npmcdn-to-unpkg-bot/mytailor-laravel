/*
 * @author Jobizzness@gmail.com
 * Application scripts
 *
 */



	// Here we declare our ng-app and modules we need
	var app = angular.module('app', ['ngRoute']);


	/*
	* Main Simple function to toggle Sidebar
	*
	 */
	app.controller("MainController",

			function($scope) {
				$scope.toggle = false;

				$scope.toggleSidebar = function () {
					$scope.toggle = !$scope.toggle;
				};
	});

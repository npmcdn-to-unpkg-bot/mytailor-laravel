/*
 * @author Jobizzness@gmail.com
 * Application scripts
 *
 */



	// Here we declare our ng-app and modules we need
	var app = angular.module('app', ['ngAnimate', 'ngMessages', 'ngSanitize', 'ngDialog']);

	var template_path = '/themes/default/views/segments/';

app.config(function (ngDialogProvider) {
    ngDialogProvider.setForceHtmlReload(true);
});

	/*
	 * Main Simple function to toggle Sidebar
	 *
	 */
	app.controller("MainController",
		function($scope) {

			/*
			 * initial value for vars
			 */

			$scope.toggle = false;
			$scope.showForm = false;

			/*
			 * $this function toggles sidebar
			 */

			$scope.toggleSidebar = function () {
					$scope.toggle = !$scope.toggle;
				};


	});

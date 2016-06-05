/*
 * @author Jobizzness@gmail.com
 * Application scripts
 *
 */



	// Here we declare our ng-app and modules we need
	var app = angular.module('app', ['ngAnimate', 'ngMessages', 'ngSanitize', 'ngDialog']);

	var template_path = '/themes/default/views/segments/';

	/*
	 * Main Simple function to toggle Sidebar
	 *
	 */
	app.controller("MainController",
		function($scope, ngDialog) {

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



			$scope.clickToOpen = function () {
    			ngDialog.open({ 
    				template: template_path + 'corp_template.html', className: 'mt-large-overlay' 
    			});
			};
	});

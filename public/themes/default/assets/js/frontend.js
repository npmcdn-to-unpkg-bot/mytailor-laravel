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
app.controller("MainController", function($scope, ngDialog) {

    //$location.search({ref: ''});

    $scope.toggle = false;
    $scope.showForm = false;
    $scope.searching = false;

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


//    $scope.showSearch = function(){
//        console.log('checking')
//        $scope.searching = !$scope.searching;
//}


});

app.controller("authController", ["$scope",

    function($scope, $location) {

        //$location.path('/').search({id: '92938920'});

        $scope.token = angular.element(document.getElementById('csrf')).val();

    }]);
	'use strict';

	app.controller("shotsController", ["$scope", "ngDialog","$window",

		function($scope, ngDialog, $window) {

			$scope.open = function ($name) {

				$name = $name.replace(/\.[^/.]+$/, "");

				if ($window.innerWidth < 768) {

					$window.location.href = '/shot/'+ $name;
					return;
				};

				var dialogScope = $scope.$new();
				dialogScope.name = $name;
				history.pushState({}, '', '/shot/'+$name);

    			ngDialog.open({
    				closeByNavigation: true,
				    cache:false, 
    				template: template_path + 'shots_overlay.html', className: 'mt-shots-overlay' ,
    				controller: 'ovalController',
				    scope: dialogScope,
					preCloseCallback: function() {
				       		history.back();
				            return true;
    				}

				    
    			});

			};

		}]);
	'use strict';

	app.controller("ovalController", ["$scope","shotFactory", "$timeout",

		function($scope, shotFactory, $timeout) {
			
			 		 shotFactory.show($scope.name).then(function(response){
			 				$scope.shot = response.data;
			 		});

			 		$timeout(function(){
			 		 	shotFactory.viewed($scope.name);
			 		 }, 1500);
		}

			]);

		app.controller("shotController", ["$scope","shotFactory", "$timeout","$window",

		function($scope, shotFactory, $timeout, $window) {

					var $name = $window.location.href;

					$name = $name.substring($name.lastIndexOf('/')+1);

			 		$timeout(function(){
			 		 	shotFactory.viewed($name);
			 		 }, 1500);
		}

			]);
'use strict';

	app.controller("designersController", ["$scope","shotFactory",

		function($scope, shotFactory) {

//this should be moved
			// angular.forEach(angular.element(document.querySelector(".designer-item")), function(value, key){
			//      var a = angular.element(value);
			//      a.addClass('ss');

			// });
		}

		]);
	app.factory('shotFactory', ['$http', function($http){

			// will return object of a single shot
			this.show = function (name) {
			  	return $http.get("/api/shot/" + name);
			};

			this.viewed = function(name){
				return $http.post("/api/shot/viewed/" + name);
			};

			// this.update = function(id, shot){
			// 	return $http.put('/admin/shots/' + id, shot);
			// };

			// this.destroy = function(name){
			// 	return $http.delete('/admin/shots/' + name);
			// };

			return this;
	}]);

//# sourceMappingURL=frontend.js.map

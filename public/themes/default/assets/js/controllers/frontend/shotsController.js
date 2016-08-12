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
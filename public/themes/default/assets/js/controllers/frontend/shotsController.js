	'use strict';

	app.controller("shotsController", ["$scope", "ngDialog",

		function($scope, ngDialog) {

			$scope.open = function ($name) {

				$name = $name.replace(/\.[^/.]+$/, "");

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

		}



			]);
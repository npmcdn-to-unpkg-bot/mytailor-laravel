	'use strict';

	app.controller("shotsController", ["$scope", "ngDialog",

		function($scope, ngDialog) {

			$scope.open = function ($name) {
    			ngDialog.open({ 
    				template: template_path + 'shots_overlay.html', className: 'mt-shots-overlay' ,
    				 controller: 'ovalController',
    				 resolve: {
				        dep: function depFactory() {
				            return 'dep value';
				        }
				    }
    			});

			};

		}

			]);
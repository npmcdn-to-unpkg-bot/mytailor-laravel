var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.assetsPath = 'resources/assets';
elixir.config.publicPath = elixir.config.assetsPath;



	// This will mix vendor scripts
	elixir(function(mix) {
		mix.scripts(
			[
			    'bower/angular/angular.min.js',
			    'bower/angular/angular-route.min.js',
				'bower/angular/angular-animate.min.js',
			    'bower/jquery/dist/jquery.min.js',
			    'bower/Waves/dist/waves.min.js'
			   ], 	 'public/themes/default/assets/js/vendor.js')
	});

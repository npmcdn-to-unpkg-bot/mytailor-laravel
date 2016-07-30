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

elixir.config.assetsPath = 'vendor/bower_components';
elixir.config.publicPath = 'public/themes/default/assets';




	elixir(function(mix) {
        //mix main sass for our app
		mix.sass('../../../public/themes/default/assets/sass/admin.scss');
        mix.sass('../../../public/themes/default/assets/sass/frontend.scss');

        // This will mix vendor scripts
		mix.scripts(
			[
			    '../angular/angular.min.js',
			    '../angular/angular-animate.min.js',
			    '../angular/angular-messages.min.js',
			   	'../angular/angular-sanitize.min.js',
			    '../jquery/dist/jquery.min.js',
				'../masonry/dist/masonry.pkgd.min.js',
			    '../Waves/dist/waves.min.js',
				'../ng-dialog/js/ngDialog.min.js',
                '../jquery-infinite-scroll/jquery.infinitescroll.js',
                '../imagesloaded/imagesloaded.pkgd.min.js',
				'../select2/dist/js/select2.min.js'
			   ], 	 'public/themes/default/assets/js/vendor.js');

     //   mix vendor css
	});

/*
 * Here we shall mix
 */
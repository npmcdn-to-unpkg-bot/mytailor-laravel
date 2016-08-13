<?php


/**
 * Social & Local Registration routes.
 *
 */
Route::get('/login/{provider?}',[
		'uses' => 'AuthFrontendController@getSocialAuth',
		'as'   => 'auth.getSocialAuth'
]);


Route::get('/login/callback/{provider?}',[
		'uses' => 'AuthFrontendController@getSocialAuthCallback',
		'as'   => 'auth.getSocialAuthCallback'
]);

Route::controller('auth', 'Auth\AuthController', [
		'getLogin' => 'auth.login',
		'getLogout' => 'auth.logout'
]);
/**
 * Admin Registration Routes.
 *
 */
Route::post('/register', [
	'as' => 'register_user',
	'uses' => 'AuthFrontendController@store'
]);

Route::get('auth/logout', 'Auth\AuthController@logout');


//Form to upload shots
Route::get('admin/shots/upload', [
		'as' => 'shots.upload',
		'uses' => 'Admin\ShotsController@create'
]);


// Admin Resources :
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/shots', 'Admin\ShotsController');
Route::resource('admin/tags', 'Admin\TagsController');

Route::get('admin/dashboard', [
		'as' => 'admin.dashboard',
		'uses' => 'Admin\DashboardController@index'
	]);

Route::get('/shot/{id}',  [
				'as' => 'shot',
				'uses' => 'Frontend\ShotsController@show']
);

Route::post('/shot/viewed/{id}',  [
				'as' => 'shot.viewed',
				'uses' => 'Frontend\ShotsController@viewed']
);

Route::get('/', [
		'as' => 'frontend.home',
		'uses' => 'Frontend\HomeController@index']
);

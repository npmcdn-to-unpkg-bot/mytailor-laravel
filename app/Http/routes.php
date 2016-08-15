<?php

/**
 * Users Authentication
 */

Route::get('/login', [
		'uses' => 'Auth\AuthController@getLogin',
		'as'   => 'auth.login'
]);


Route::get('/logout', [
		'uses' => 'Auth\AuthController@logout',
		'as'   => 'auth.logout'
]);

Route::post('/login', [
		'uses' => 'Auth\AuthController@postLogin'
]);


/**
 * Social & Local Registration routes.
 *
 */
Route::get('/login/{provider?}',[
		'uses' => 'Auth\AuthController@getSocialAuth',
		'as'   => 'auth.getSocialAuth'
]);


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
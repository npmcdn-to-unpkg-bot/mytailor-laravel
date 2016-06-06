<?php

//Authentication :
Route::get('auth/logout', 'Auth\AuthController@logout');
Route::controller('auth', 'Auth\AuthController', [
	'getLogin' => 'auth.login',
	'getLogout' => 'auth.logout'
	]);

//This will run our uploader class and upload all files
Route::get('admin/shots/upload', [
		'as' => 'shots.upload',
		'uses' => 'Admin\ShotsController@create'
]);

// Admin Resources :

// Admin Resources :
Route::resource('admin/pages', 'Admin\PagesController');
Route::resource('admin/users', 'Admin\UsersController');
Route::resource('admin/shots', 'Admin\ShotsController');

Route::get('admin/dashboard', [
		'as' => 'admin.dashboard',
		'uses' => 'Admin\DashboardController@index'
	]);

Route::get('/', [
		'as' => 'frontend.home',
		'uses' => 'Frontend\HomeController@index']
);



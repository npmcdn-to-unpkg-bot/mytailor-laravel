<?php


//Authentication :
Route::get('auth/logout', 'Auth\AuthController@logout');
Route::controller('auth', 'Auth\AuthController', [
	'getLogin' => 'auth.login',
	'getLogout' => 'auth.logout'
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

Route::get('admin/dashboard', [
		'as' => 'admin.dashboard',
		'uses' => 'Admin\DashboardController@index'
	]);

//Route::get('/shots', function(){
//	return view('frontend.shots');
//});
Route::get('/', [
		'as' => 'frontend.home',
		'uses' => 'Frontend\HomeController@index']
);



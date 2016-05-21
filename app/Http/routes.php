<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
|
*/

/*
 * This route will log Admin out of the system
 * @redirect to auth/login
 */
Route::get('auth/logout', 'Auth\AuthController@logout');

Route::controller('auth', 'Auth\AuthController', [
	'getLogin' => 'auth.login',
	'getLogout' => 'auth.logout'
	]);

//Route::resource('admin/pages', 'Admin\PagesController');

Route::get('admin/shots/upload', [
		'as' => 'shots.upload',
		'uses' => 'Admin\ShotsController@upload'
]);
Route::delete('admin/uploader', function(){
		return 'hello Africans';
});
Route::resource('admin/uploader', 'Admin\UploadController');
Route::resource('admin/shots', 'Admin\ShotsController');

Route::get('admin/dashboard', [
		'as' => 'admin.dashboard',
		'uses' => 'Admin\DashboardController@index'
	]);

Route::get('/', function(){
	return view('index');
});


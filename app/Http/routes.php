<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
|
*/

Route::controller('auth', 'Auth\AuthController', [
	'getLogin' => 'auth.login'
	]);

Route::get('admin/dashboard', [
		'as' => 'admin.dashboard',
		'uses' => 'Admin\DashboardController@index'
	]);

Route::get('/', function(){
	return view('index');
});


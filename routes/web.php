<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome_2', function()
	{
		return view('welcome_2');
	});

Auth::routes();

Route::get('/chat', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

Route::get('/home', 'HomeController@index');

// Logged in users/admin cannot access or send requests to these pages
Route::group(['middleware' => 'admin_guest'], function() {
	Route::get('admin_register', 'AdminAuth\RegisterController@showRegistrationForm');
	Route::post('admin_register', 'AdminAuth\RegisterController@register');
	Route::get('admin_login', 'AdminAuth\LoginController@showLoginForm');
	Route::post('admin_login', 'AdminAuth\LoginController@login');

	// Password reset routes
	Route::get('admin_password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
	Route::post('admin_password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
	Route::get('admin_password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
	Route::post('admin_password/reset', 'AdminAuth\ResetPasswordController@reset');
});


// Only logged in admin can access or send requests to these pages
Route::group(['middleware' => 'admin_auth'], function() {
	Route::post('admin_logout', 'AdminAuth\LoginController@logout');
	Route::get('/admin_home', function(){
		return view('admin.home');
	});
});









<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use \App\User;
use \App\Party;

Route::get('/', function () {
	return Auth::check()? 'estás logueado':  view('welcome');
});

Route::get('login', function() {
	return Auth::check()? redirect('/'): view('auth.login');
});

Route::get('register', function() {
	return Auth::check()? redirect('/'): view('auth.register');
});

Route::group(['middleware' => 'guest'], function () {
	Route::post('auth/register', 'UserController@create');
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
});

Route::group(['middleware' => 'auth'], function (){
	Route::get('/auth/logout', 'Auth\AuthController@getLogout');
	Route::get('/prueba_registro', function(){
		Auth::logout();
		return 'has cerrado sesión';
	});
});

Route::get('/prueba', function(){
	/*
	$newUser = new User(array(
		'name' 		=> 'usuario',
		'email' 	=> 'user@gmail.com',
		'password' 	=> bcrypt('pass'),
		'image' 	=> 'usuario.jpg',
		'is_admin' 	=> true
	));
	$newUser->save();
	*//*
	$party = new Party(array(
		'name' => 'party1',
		'num_players' => 4,
		'state' => 'active',
		'master_id' => 1
	));
	$party->save();
	*//*
	$user = User::find(1);
	foreach ($user->partyMaster as $key) {
		var_dump($key->name);
	}
	*//*
	$party = Party::find(1);
	var_dump($party->master->name);
	*/
	return 'cool';
});
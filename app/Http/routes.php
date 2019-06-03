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
	return Auth::check()? view('index'):  view('welcome');
});

Route::get('lang/{lang}', function($lang){
	session(['lang' => $lang]);
	return \Redirect::back();
})->where([
	'lang' => 'en|es'
]);

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
	Route::get('auth/logout', 'Auth\AuthController@getLogout');
	Route::get('logout', function(){
		Auth::logout();
		return redirect('/');
	});

	Route::get('parties', function(){ return view('parties.parties'); });
	Route::get('join-party', function(){ return view('parties.join-party'); });
	Route::get('new-party', function(){ return view('parties.new-party'); });

	Route::get('races/{name}', function($name){ return view('info-folder.race')->with('race', $name);	});
	Route::get('classes/{name}', function($name){ return view('info-folder.class')->with('className', $name); });
	Route::get('objects/{option}', function($option){ return view('info-folder.equipment')->with('filter', $option); });

	Route::get('spells', function(){ return view('info-folder.spellsList'); });

	Route::post('form-new-party', 'PartyController@create');
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
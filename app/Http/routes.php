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
use \App\Race;
use \App\Character;

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

	Route::get('races/{name}', function($name){ return view('info-folder.race')->with('race', $name);	});
	Route::get('classes/{name}', function($name){ return view('info-folder.class')->with('className', $name); });
	Route::get('objects/{option}', function($option){ return view('info-folder.equipment')->with('filter', $option); });
	Route::get('spells', function(){ return view('info-folder.spellsList'); });

	Route::get('parties', function(){ return view('parties.parties'); });
	Route::get('join-party', function(){ return view('parties.join-party'); });
	Route::get('new-party', function(){ return view('parties.new-party'); });

	Route::get('join-party/{idParty}', 'PartyController@join');
	Route::get('show-party-master/{idParty}', 'PartyController@showPartyMaster');
	Route::get('show-party-character/{idParty}', 'PartyController@showPartyCharacter');

	Route::get('get-data-character', 'PartyController@getDataCharacter');
	Route::get('get-data-ability', 'AbilityController@getDataAbility');
	Route::get('learn-special-aptitude', 'SpecialAptitudeController@learnSpecialAptitude');
	Route::get('learn-spell', 'SpellController@learnSpell');
	Route::get('add-equipment', 'EquipmentController@addEquipment');
	Route::get('delete-equipment', 'EquipmentController@deleteEquipment');
	Route::get('send-message', 'ChatController@sendMessage');
	Route::get('old-messages', 'ChatController@paginateOldMessages');

	Route::post('form-new-party', 'PartyController@create');
	Route::post('form-new-character', 'PartyController@createCharacter');
});

Route::get('/prueba', function(){
	return Character::find(10)->abilities;
});
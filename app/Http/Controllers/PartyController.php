<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use Config;
use Auth;
use Lang;
use App\Party;
use App\User;

class PartyController extends Controller
{
	public function create(Request $request){
		$this->validate($request, [
			'name'			=>	'required|unique:parties',
			'description'	=>	'required',
			'numPlayers'	=>	'required|numeric',
			'image'			=> 	'required|image|mimes:jpg,jpeg,bmp,gif,png|max:'.Config::get('app.photo_max_size')
		]);

		$nameImage = str_replace(' ', '_', $request->input('name')).'.'.$request->file('image')->extension();
		$request->file('image')->move(Config::get('app.url_image_party'), $nameImage);

		$newParty = Party::create([
			'name'	=>	$request->input('name'),
			'num_players'	=>	$request->input('numPlayers'),
			'state'			=>	'onHold',
			'master_id'		=>	Auth::id(),
			'description'	=>	$request->input('description'),
		]);
		$newParty->save();

		return redirect('/parties')->with('send', Lang::get('parties.createParty'));;
	}
}

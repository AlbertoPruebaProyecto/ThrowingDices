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
use App\Character;
use App\Level;

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
			'state'			=>	'onPrepare',
			'master_id'		=>	Auth::id(),
			'description'	=>	$request->input('description'),
			'image'			=>	$nameImage
		]);
		$newParty->save();

		return redirect('/parties')->with('send', Lang::get('parties.createParty'));;
	}

	public function join($idParty){
		$party = Party::find($idParty);

		if (!$party) {
			return redirect::back()->withErrors('La partida seleccionada no existe');
		}
		if ($party->isMaster(Auth::id())) {
			return redirect::back()->withErrors('No puedes unirte porque eres el máster');
		}
		if (!$party->isOnPrepare()) {
			return redirect::back()->withErrors('La partida no admite nuevas incorporaciones');
		}
		if ($party->isJoin(Auth::id())) {
			return redirect::back()->withErrors('Ya formas parte de esa partida');
		}

		return view('parties.create-character', ['idParty' => $idParty]);
	}

	public function createCharacter(Request $request){
		return 'cool';
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Character;
use App\SpecialAptitude;

class SpecialAptitudeController extends Controller
{
	public function learnSpecialAptitude(Request $request){
		$character = Character::find($request->input('idCharacter'));
		$aptitude = SpecialAptitude::find($request->input('idAptitude'));

		$character->specialAptitudes()->attach($aptitude);

		$data = [
			'html'	=>	view('parties.contents.special-aptitude', compact('aptitude'))->render(),
			'idAptitude' => $request->input('idAptitude'),
		];

		return response()->json($data);
	}
}

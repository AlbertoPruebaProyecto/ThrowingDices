<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Character;
use App\Spell;

class SpellController extends Controller
{
	public function learnSpell(Request $request){
		$character = Character::find($request->input('idCharacter'));
		$spell = Spell::find($request->input('idSpell'));

		$character->spells()->attach($spell);

		$data = [
			'html'	=>	view('parties.contents.spell', compact('spell'))->render(),
			'idSpell' => $request->input('idSpell'),
		];

		return response()->json($data);
	}
}

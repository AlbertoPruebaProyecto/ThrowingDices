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
use App\Classpj;
use App\Race;
use App\Level;
use App\Money;
use App\Ability;

class PartyController extends Controller
{
	public function create(Request $request){
		$this->validate($request, [
			'name'			=>	'required|unique:parties',
			'description'	=>	'required',
			'numPlayers'	=>	'required|numeric',
			'image'			=> 	'required'
		]);

		$newParty = Party::create([
			'name'	=>	$request->input('name'),
			'num_players'	=>	$request->input('numPlayers'),
			'state'			=>	'onPrepare',
			'master_id'		=>	Auth::id(),
			'description'	=>	$request->input('description'),
			'image'			=>	$request->input('image').'.jpg'
		]);
		$newParty->save();

		return redirect('/parties')->with('send', Lang::get('parties.createParty'));
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
		$this->validate($request, [
			'name'			=>	'required|string|unique:characters|max:255',
			'age'			=>	'required|numeric|max:200',
			'sex'			=>	'required|string|max:255',
			'history'		=>	'required|string|max:1000',
			'strength'		=>	'required|numeric|max:20|min:1',
			'skill'			=>	'required|numeric|max:20|min:1',
			'constitution'	=>	'required|numeric|max:20|min:1',
			'intelligence'	=>	'required|numeric|max:20|min:1',
			'wisdom'		=>	'required|numeric|max:20|min:1',
			'charisma'		=>	'required|numeric|max:20|min:1',
			'race'			=>	'required|exists:races,name',
			'classpj'		=>	'required|exists:classes,name',
			'idParty'		=>	'required|exists:parties,id',
		]);

		$race = Race::where('name', '=', $request->input('race'))->first();
		$classpj = Classpj::where('name', '=', $request->input('classpj'))->first();
		$newWallet = Money::create([
			'gold'		=>	100,
			'silver'	=>	100,
			'copper'	=>	100,
		]);
		$newWallet->save();

		$newCharacter = Character::create([
			'name'			=>	$request->input('name'),
			'sex'			=>	$request->input('sex'),
			'age'			=>	$request->input('age'),
			'history'		=>	$request->input('history'),
			'strength'		=>	$request->input('strength') + $race->getSkillsStats('strength'),
			'skill'			=>	$request->input('skill') + $race->getSkillsStats('skill'),
			'constitution'	=>	$request->input('constitution') + $race->getSkillsStats('constitution'),
			'intelligence'	=>	$request->input('intelligence') + $race->getSkillsStats('intelligence'),
			'wisdom'		=>	$request->input('wisdom') + $race->getSkillsStats('wisdom'),
			'charisma'		=>	$request->input('charisma') + $race->getSkillsStats('charisma'),
			'party_id'		=>	$request->input('idParty'),
			'level_id'		=>	Level::where('num', '=', 1)->first()->id,
			'class_id'		=>	$classpj->id,
			'race_id'		=>	$race->id,
			'money_id'		=>	$newWallet->id,
			'user_id'		=>	Auth::id(),
		]);
		$newCharacter->save();

		$newCharacter->party->checkReady();

		$this->saveAbility($newCharacter, 'acrobatics', false, 'skill');
		$this->saveAbility($newCharacter, 'craftwork', false, 'intelligence');
		$this->saveAbility($newCharacter, 'discover_intentions', false, 'wisdom');
		$this->saveAbility($newCharacter, 'knowledge_spells', true, 'intelligence');
		$this->saveAbility($newCharacter, 'diplomacy', false, 'charisma');
		$this->saveAbility($newCharacter, 'dress_up', false, 'charisma');
		$this->saveAbility($newCharacter, 'trickery', false, 'charisma');
		$this->saveAbility($newCharacter, 'escapism', false, 'skill');
		$this->saveAbility($newCharacter, 'play', false, 'charisma');
		$this->saveAbility($newCharacter, 'intimidate', false, 'charisma');
		$this->saveAbility($newCharacter, 'render_machine', true, 'skill');
		$this->saveAbility($newCharacter, 'hand_game', true, 'skill');
		$this->saveAbility($newCharacter, 'linguistics', true, 'intelligence');
		$this->saveAbility($newCharacter, 'ride', false, 'skill');
		$this->saveAbility($newCharacter, 'swim', false, 'strength');
		$this->saveAbility($newCharacter, 'perception', false, 'wisdom');
		$this->saveAbility($newCharacter, 'wisdom_arcane', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_dungeons', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_geography', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_history', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_ingineering', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_local', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_map', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_nature', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_nobility', true, 'intelligence');
		$this->saveAbility($newCharacter, 'wisdom_religion', true, 'intelligence');
		$this->saveAbility($newCharacter, 'discretion', false, 'skill');
		$this->saveAbility($newCharacter, 'survival', false, 'wisdom');
		$this->saveAbility($newCharacter, 'valuation', false, 'intelligence');
		$this->saveAbility($newCharacter, 'animal_contact', true, 'charisma');
		$this->saveAbility($newCharacter, 'climb', false, 'strength');
		$this->saveAbility($newCharacter, 'use_magic_object', true, 'charisma');
		$this->saveAbility($newCharacter, 'fly', false, 'skill');

		return redirect('/parties')->with('send', 'Te has unido a la partida correctamente');
	}

	private function saveAbility(Character $character, String $name, Bool $onlyLearn, String $skillBase){
		$newAbility = Ability::create([
			'name'			=>	$name,
			'special_class'	=>	$character->classpj->isAbilityFromClass($name),
			'only_learn'	=>	$onlyLearn,
			'skill_base'	=>	$skillBase,
			'character_id'	=>	$character->id,
		]);
		$newAbility->save();
	}

	public function showPartyCharacter($idParty){
		$party = Party::find($idParty);

		if (!$party) {
			return redirect::back()->withErrors('La partida seleccionada no existe');
		}
		if ($party->isMaster(Auth::id())) {
			return redirect::back()->withErrors('No puedes entrar como jugador porque eres el master');
		}
		if (!$party->isActive()) {
			return redirect::back()->withErrors('Todos los jugadores aún no se han creado');
		}
		if (!$party->isJoin(Auth::id())) {
			return redirect::back()->withErrors('No formas parte de esa partida');
		}

		return 'eres personaje jugador';
	}

	public function showPartyMaster($idParty){
		$party = Party::find($idParty);

		if (!$party) {
			return redirect::back()->withErrors('La partida seleccionada no existe');
		}
		if (!$party->isMaster(Auth::id())) {
			return redirect::back()->withErrors('No puedes entrar como master porque no lo eres');
		}
		if (!$party->isActive()) {
			return redirect::back()->withErrors('Todos los jugadores aún no se han creado');
		}

		return 'eres master';
	}
}

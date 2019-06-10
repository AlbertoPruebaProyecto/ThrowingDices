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
use App\SpecialAptitude;
use App\Spell;
use App\Equipment;

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
			'name'				=>	$request->input('name'),
			'sex'				=>	$request->input('sex'),
			'age'				=>	$request->input('age'),
			'history'			=>	$request->input('history'),
			'strength'			=>	$request->input('strength') + $race->getSkillsStats('strength'),
			'skill'				=>	$request->input('skill') + $race->getSkillsStats('skill'),
			'constitution'		=>	$request->input('constitution') + $race->getSkillsStats('constitution'),
			'intelligence'		=>	$request->input('intelligence') + $race->getSkillsStats('intelligence'),
			'wisdom'			=>	$request->input('wisdom') + $race->getSkillsStats('wisdom'),
			'charisma'			=>	$request->input('charisma') + $race->getSkillsStats('charisma'),
			'hit_points_total'	=>	20,
			'hit_points_present'=>	20,
			'base_attack'		=>	2,
			'party_id'			=>	$request->input('idParty'),
			'level_id'			=>	Level::where('num', '=', 1)->first()->id,
			'class_id'			=>	$classpj->id,
			'race_id'			=>	$race->id,
			'money_id'			=>	$newWallet->id,
			'user_id'			=>	Auth::id(),
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

		return view('parties.party-character')->with('character', $party->getCharacter(Auth::id()));
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

	public function getDataCharacter(Request $request){
		$character = Character::find($request->input('character_id'));

		$character->experience = $request->input('experience');

		$character->strength = $request->input('strength');
		$character->strength_temp = $request->input('strengthTemp');

		$character->skill = $request->input('skill');
		$character->skill_temp = $request->input('skillTemp');

		$character->constitution = $request->input('constitution');
		$character->constitution_temp = $request->input('constitutionTemp');

		$character->intelligence = $request->input('intelligence');
		$character->intelligence_temp = $request->input('intelligenceTemp');

		$character->wisdom = $request->input('wisdom');
		$character->wisdom_temp = $request->input('wisdomTemp');

		$character->charisma = $request->input('charisma');
		$character->charisma_temp = $request->input('charismaTemp');

		$character->hit_points_present = $request->input('hitPointsPresent');
		$character->hit_points_total = $request->input('hitPointsTotal');

		$character->initiative = $request->input('initiative');

		$character->armor_bonus = $request->input('bonusArmor');
		$character->base_attack = $request->input('baseAttack');

		$character->fortitude_base = $request->input('fortitudeBase');
		$character->fortitude_mod_var = $request->input('fortitudeModVar');
		$character->fortitude_temp = $request->input('fortitudeTemp');

		$character->reflex_base = $request->input('reflexBase');
		$character->reflex_mod_var = $request->input('reflexModVar');
		$character->reflex_temp = $request->input('reflexTemp');

		$character->will_base = $request->input('willBase');
		$character->will_mod_var = $request->input('willModVar');
		$character->will_temp = $request->input('willTemp');

		$character->save();

		$character->changeLevel();
		$character = Character::find($request->input('character_id'));

		$data = [
			'level'			=>	$character->level->num,
			'exp'			=>	$character->experience,
			'expLimit'		=>	$character->level->exp_limit,
			'livePercentage'=>	$character->livePercentage(),

			'strength'		=>	$character->strength,
			'strengthMod'	=>	$character->modCharacter('strength'),
			'strengthTemp'	=>	$character->strength_temp,

			'skill'		=>	$character->skill,
			'skillMod'	=>	$character->modCharacter('skill'),
			'skillTemp'	=>	$character->skill_temp,

			'constitution'		=>	$character->constitution,
			'constitutionMod'	=>	$character->modCharacter('constitution'),
			'constitutionTemp'	=>	$character->constitution_temp,

			'intelligence'		=>	$character->intelligence,
			'intelligenceMod'	=>	$character->modCharacter('intelligence'),
			'intelligenceTemp'	=>	$character->intelligence_temp,

			'wisdom'		=>	$character->wisdom,
			'wisdomMod'		=>	$character->modCharacter('wisdom'),
			'wisdomTemp'	=>	$character->wisdom_temp,

			'charisma'		=>	$character->charisma,
			'charismaMod'	=>	$character->modCharacter('charisma'),
			'charismaTemp'	=>	$character->charisma_temp,

			'hitPointsTotal'	=>	$character->hit_points_total,
			'hitPointsPresent'	=>	$character->hit_points_present,

			'initiative'		=>	$character->initiative,
			'initiativeTotal'	=>	$character->initiativeTotal(),

			'bonusArmor'	=>	$character->armor_bonus,
			'armorTotal'	=>	$character->armorTotal(),
			'baseAttack'	=>	$character->base_attack,
			'bmc'			=>	$character->BMC(),
			'dmc'			=>	$character->DMC(),

			'fortitudeBase'		=>	$character->fortitude_base,
			'fortitudeModVar'	=>	$character->fortitude_mod_var,
			'fortitudeTemp'		=>	$character->fortitude_temp,
			'fortitudeTotal'	=>	$character->fortitudeTotal(),

			'reflexBase'	=>	$character->reflex_base,
			'reflexModVar'	=>	$character->reflex_mod_var,
			'reflexTemp'	=>	$character->reflex_temp,
			'reflexTotal'	=>	$character->reflexTotal(),

			'willBase'		=>	$character->will_base,
			'willModVar'	=>	$character->will_mod_var,
			'willTemp'		=>	$character->will_temp,
			'willTotal'		=>	$character->willTotal(),

			'abilities'	=>	$character->abilities,
		];

		return response()->json($data);
	}

	public function getDataAbility(Request $request){
		$ability = Ability::find($request->input('abilityId'));

		if ($request->input('rankUp') == 'true') {
			$ability->rankUp();
		}

		$data = [
			'ability'	=>	$ability,
			'totalRank'	=>	$ability->totalRank(),
		];

		return response()->json($data);
	}

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

	public function addEquipment(Request $request){
		$character = Character::find($request->input('idCharacter'));
		$equipment = Equipment::find($request->input('idEquipment'));

		$character->equipments()->attach($equipment);

		$data = [
			'html'			=>	view('parties.contents.table-equipment', compact('equipment', 'character'))->render(),
			'idEquipment' 	=> $request->input('idEquipment'),
		];

		return response()->json($data);
	}

	public function deleteEquipment(Request $request){
		$character = Character::find($request->input('idCharacter'));
		$equipment = Equipment::find($request->input('idEquipment'));

		$character->equipments()->detach($equipment);

		$data = [
			'idEquipment' => $request->input('idEquipment'),
		];

		return response()->json($data);
	}
}

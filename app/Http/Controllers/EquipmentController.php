<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Character;
use App\Equipment;

class EquipmentController extends Controller
{
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

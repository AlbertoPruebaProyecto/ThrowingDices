<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Character;
use App\Ability;

class AbilityController extends Controller
{
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
}

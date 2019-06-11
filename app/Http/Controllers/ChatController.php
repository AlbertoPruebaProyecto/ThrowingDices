<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Character;
use App\Chat;

class ChatController extends Controller
{
	public function sendMessage(Request $request){
		//TODO VALIDATE
		$character = Character::find($request->input('idCharacter'));

		$newChat = Chat::create([
			'message'		=>	$request->input('message'),
			'character_id'	=>	$character->id,
			'party_id'		=>	$character->party->id,
		]);
		$newChat->save();

		$chats = Chat::where('party_id', $character->id)->where('id', '>', $character->last_chat_read)->get();

		$data = [
			'html'	=>	view('parties.contents.content-chat', compact('chats'))->render()
		];

		return response()->json($data);
	}
}

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
		if ($request->input('message')) {
			$newChat = Chat::create([
				'message'		=>	$request->input('message'),
				'character_id'	=>	$character->id,
				'party_id'		=>	$character->party->id,
				'is_throw'		=>	$request->input('isThrow')? true: false,
			]);
			$newChat->save();
		}
		$chats = Chat::where('party_id', $character->party->id)->where('id', '>', $character->last_chat_read)->get();
		foreach ($chats as $chat) {
			$character->last_chat_read = $chat->id;
		}
		$character->save();
		$data = [
			'html'	=>	view('parties.contents.content-chat', compact('chats', 'character'))->render()
		];
		return response()->json($data);
	}

	public function paginateOldMessages(Request $request){
		$character = Character::find($request->input('idCharacter'));
		$chats = Chat::where('party_id', $character->party->id)
		->where('id', '<=', $request->input('firstOldMessage'))
		->orderBy('id', 'desc')
		->paginate(20);
		$chats = $chats->reverse();
		$data = [
			'html'	=>	view('parties.contents.content-chat', compact('chats', 'character'))->render()
		];
		return response()->json($data);
	}
}

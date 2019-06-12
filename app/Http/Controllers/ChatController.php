<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Character;
use App\Party;
use App\Chat;

class ChatController extends Controller
{
	public function sendMessage(Request $request){
		$character = Character::find($request->input('idCharacter'));
		if ($request->input('message')) {
			$newChat = Chat::create([
				'message'		=>	$request->input('message'),
				'character_id'	=>	$character->id,
				'party_id'		=>	$character->party->id,
				'is_throw'		=>	$request->input('isThrow')? true: false,
				'is_master'		=>	false,
			]);
			$newChat->save();
		}
		$chats = Chat::where('party_id', $character->party->id)->where('id', '>', $character->last_chat_read)->get();
		foreach ($chats as $chat) {
			$character->last_chat_read = $chat->id;
		}
		$character->save();
		$characterId = $character->id;
		$data = [
			'html'	=>	view('parties.contents.content-chat', compact('chats', 'characterId'))->render()
		];
		return response()->json($data);
	}

	public function sendMessageMaster(Request $request){
		$party = Party::find($request->input('idParty'));
		if ($request->input('message')) {
			$newChat = Chat::create([
				'message'		=>	$request->input('message'),
				'character_id'	=>	1,
				'party_id'		=>	$party->id,
				'is_throw'		=>	$request->input('isThrow')? true: false,
				'is_master'		=>	true,
			]);
			$newChat->save();
		}
		$chats = Chat::where('party_id', $party->id)->where('id', '>', $party->last_chat_read_master)->get();
		foreach ($chats as $chat) {
			$party->last_chat_read_master = $chat->id;
		}
		$party->save();
		$characterId = 0;
		$data = [
			'html'	=>	view('parties.contents.content-chat', compact('chats', 'characterId'))->render()
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
		$characterId = $character->id;
		$data = [
			'html'	=>	view('parties.contents.content-chat', compact('chats', 'characterId'))->render()
		];
		return response()->json($data);
	}

	public function paginateOldMessagesMaster(Request $request){
		$party = Party::find($request->input('idParty'));
		$chats = Chat::where('party_id', $party->id)
		->where('id', '<=', $request->input('firstOldMessage'))
		->orderBy('id', 'desc')
		->paginate(20);
		$chats = $chats->reverse();
		$characterId = 0;
		$data = [
			'html'	=>	view('parties.contents.content-chat', compact('chats', 'characterId'))->render()
		];
		return response()->json($data);
	}
}

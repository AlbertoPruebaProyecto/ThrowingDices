<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
	protected $table = 'chats';
	public $timestamps = true;

	protected $guarded = array();

	public function character(){
		return $this->belongsTo('App\Character');
	}

	public function party(){
		return $this->belongsTo('App\Party');
	}

	public function isMy(){
		return $this->character_id->id == Auth::id();
	}
}

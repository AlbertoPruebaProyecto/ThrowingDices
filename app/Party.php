<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
	protected $table = 'parties';
	public $timestamps = true;

	protected $fillable = [
		'name', 'description', 'num_players', 'state', 'master_id', 'image'
	];

	public function master(){
		return $this->belongsTo('App\User');
	}

	public function characters(){
		return $this->hasMany('App\Character');
	}

	public function isJoin($userId){
		foreach ($this->characters() as $character) {
			if ($character->id == $userId) {
				return true;
			}
		}
		return false;
	}

	public function isMaster($userId){
		return $this->master_id == $userId;
	}

	public function isOnPrepare(){
		return $this->state == 'onPrepare';
	}
}

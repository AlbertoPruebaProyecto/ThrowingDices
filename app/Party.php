<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
	protected $table = 'parties';
	public $timestamps = true;

	protected $fillable = [
		'name', 'description', 'num_players', 'state', 'master_id'
	];

	public function master(){
		return $this->belongsTo('App\User');
	}

	public function characters(){
		return $this->hasMany('App\Character');
	}
}

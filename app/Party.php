<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
	protected $table = 'parties';
	public $timestamps = true;

	protected $fillable = [
		'name', 'num_players', 'state', 'master_id'
	];

	public function master(){
		return $this->belongsTo('App\User');
	}
}

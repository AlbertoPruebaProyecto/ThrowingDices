<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
	protected $table = 'abilities';
	public $timestamps = false;

	protected $guarded = array();

	public function characters(){
		return $this->belongsTo('App\Character');
	}
}

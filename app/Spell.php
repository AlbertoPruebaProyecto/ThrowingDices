<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
	protected $table = 'spells';
	public $timestamps = false;

	protected $fillable = [
		'name', 'school', 'description'
	];

	public function characters(){
		return $this->belongsToMany('App\Character', 'characters_spells');
	}

	public function level(){
		return explode('-', $this->school)[1];
	}
}

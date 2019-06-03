<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classpj extends Model
{
	protected $table = 'classes';
	public $timestamps = false;

	protected $fillable = [
		'name', 'class_skills', 'hit_dice'
	];

	public function skillLevelUp(){
		return $this->hasMany('App\LevelUp', 'class_id');
	}

	public function specialAptitudes(){
		return $this->hasMany('App\SpecialAptitude', 'class_id');
	}

	public function characters(){
		return $this->hasMany('App\Character', 'class_id');
	}
}

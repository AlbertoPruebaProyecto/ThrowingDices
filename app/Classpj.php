<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classpj extends Model
{
	protected $table = 'classes';
	public $timestamps = false;

	protected $fillable = [
		'name', 'class_abilities', 'hit_dice'
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

	/**
	 * Use function explode on attribute 'class_abilities'
	 * @return string array
	 */
	public function classAbilitiesExplode(){
		return explode(';', $this->class_abilities);
	}

	public function isAbilityFromClass($abilityName){
		foreach ($this->classAbilitiesExplode() as $ability) {
			if ($ability == $abilityName) {
				return true;
			}
		}
		return false;
	}
}

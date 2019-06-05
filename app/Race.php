<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
	protected $table = 'races';
	public $timestamps = false;

	protected $fillable = [
		'name', 'update_skills'
	];

	public function characters(){
		return $this->hasMany('App\Character');
	}

	private function updateSkillsArray(){
		return explode(';', $this->update_skills);
	}

	public function getSkillsStats($filter){
		foreach ($this->updateSkillsArray() as $skill) {
			if (strpos($skill, $filter) !== false) {
				return (integer)str_replace($filter, '', $skill);
			}
		}
		return 0;
	}
}

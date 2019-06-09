<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
	protected $table = 'characters';
	public $timestamps = true;

	protected $guarded = array();

	public function user(){
		return $this->belongsTo('App\User');
	}

	public function party(){
		return $this->belongsTo('App\Party');
	}

	public function level(){
		return $this->belongsTo('App\Level');
	}

	public function race(){
		return $this->belongsTo('App\Race');
	}

	public function classpj(){
		return $this->belongsTo('App\Classpj', 'class_id');
	}

	public function money(){
		return $this->belongsTo('App\Money');
	}

	public function abilities(){
		return $this->hasMany('App\Ability');
	}

	public function spells(){
		return $this->belongsToMany('App\Spell', 'characters_spells');
	}

	public function specialAptitudes(){
		return $this->belongsToMany('App\SpecialAptitude', 'characters_special_aptitudes');
	}

	public function equipments(){
		return $this->belongsToMany('App\Equipment', 'characters_equipments');
	}

	public function livePercentage(){
		return ($this->hit_points_present * 100)/$this->hit_points_total;
	}

	public function changeLevel(){
		if ($this->experience > $this->level->exp_limit) {
			$this->experience = $this->experience - $this->level->exp_limit;
			$this->level_id = $this->level->num + 1;
			$this->save();
		}
	}

	public function modCharacter($filter){
		if ($filter == 'strength') {
			$stat = $this->strength;
			$temporal = $this->strength_temp;
		}elseif ($filter == 'skill') {
			$stat = $this->skill;
			$temporal = $this->skill_temp;
		}elseif ($filter == 'constitution') {
			$stat = $this->constitution;
			$temporal = $this->constitution_temp;
		}elseif ($filter == 'intelligence') {
			$stat = $this->intelligence;
			$temporal = $this->intelligence_temp;
		}elseif ($filter == 'wisdom') {
			$stat = $this->wisdom;
			$temporal = $this->wisdom_temp;
		}elseif ($filter == 'charisma') {
			$stat = $this->charisma;
			$temporal = $this->charisma_temp;
		}

		if ($stat <= 1 ) {
			return -5 + $temporal;
		}elseif ($stat <= 3) {
			return -4 + $temporal;
		}elseif ($stat <= 5) {
			return -3 + $temporal;
		}elseif ($stat <= 7) {
			return -2 + $temporal;
		}elseif ($stat <= 9) {
			return -1 + $temporal;
		}elseif ($stat <= 11) {
			return 0 + $temporal;
		}elseif ($stat <= 13) {
			return 1 + $temporal;
		}elseif ($stat <= 15) {
			return 2 + $temporal;
		}elseif ($stat <= 17) {
			return 3 + $temporal;
		}elseif ($stat <= 19) {
			return 4 + $temporal;
		}elseif ($stat <= 21) {
			return 5 + $temporal;
		}elseif ($stat <= 23) {
			return 6 + $temporal;
		}elseif ($stat <= 25) {
			return 7 + $temporal;
		}else{
			return 8 + $temporal;
		}
	}

	public function initiativeTotal(){
		return ($this->initiative + $this->modCharacter('skill'));
	}

	public function armorTotal(){
		return $this->modCharacter('skill') + $this->armor_bonus + 10;
	}

	public function BMC(){
		return $this->base_attack + $this->modCharacter('strength');
	}

	public function DMC(){
		return $this->base_attack + $this->modCharacter('strength') + $this->modCharacter('skill') + 10;
	}

	public function fortitudeTotal(){
		return $this->fortitude_base + $this->fortitude_mod_var + $this->fortitude_temp + $this->modCharacter('constitution');
	}

	public function reflexTotal(){
		return $this->reflex_base + $this->reflex_mod_var + $this->reflex_temp + $this->modCharacter('skill');
	}

	public function willTotal(){
		return $this->will_base + $this->will_mod_var + $this->will_temp + $this->modCharacter('wisdom');
	}

	public function isLearnAptitude($idAptitude){
		foreach ($this->specialAptitudes as $aptitud) {
			if ($aptitud->id == $idAptitude) {
				return true;
			}
		}
		return false;
	}
}

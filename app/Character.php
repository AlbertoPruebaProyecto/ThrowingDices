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
		}elseif ($filter == 'skill') {
			$stat = $this->skill;
		}elseif ($filter == 'constitution') {
			$stat = $this->constitution;
		}elseif ($filter == 'intelligence') {
			$stat = $this->intelligence;
		}elseif ($filter == 'wisdom') {
			$stat = $this->wisdom;
		}elseif ($filter == 'charisma') {
			$stat = $this->charisma;
		}

		if ($stat <= 1 ) {
			return -5;
		}elseif ($stat <= 3) {
			return -4;
		}elseif ($stat <= 5) {
			return -3;
		}elseif ($stat <= 7) {
			return -2;
		}elseif ($stat <= 9) {
			return -1;
		}elseif ($stat <= 11) {
			return 0;
		}elseif ($stat <= 13) {
			return 1;
		}elseif ($stat <= 15) {
			return 2;
		}elseif ($stat <= 17) {
			return 3;
		}elseif ($stat <= 19) {
			return 4;
		}elseif ($stat <= 21) {
			return 5;
		}elseif ($stat <= 23) {
			return 6;
		}elseif ($stat <= 25) {
			return 7;
		}else{
			return 8;
		}
	}

	public function initiativeTotal(){
		return ($this->initiative + $this->modCharacter('skill'));
	}
}

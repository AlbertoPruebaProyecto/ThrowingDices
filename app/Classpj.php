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

	public function SkillLevelUp(){
		return $this->hasMany('App\LevelUp', 'class_id');
	}
}

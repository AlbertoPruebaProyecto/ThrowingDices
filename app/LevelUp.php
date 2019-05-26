<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelUp extends Model
{
	protected $table = 'level_ups';
	public $timestamps = false;

	protected $fillable = [
		'level', 'base_atack', 'strenght', 'reflection', 'will', 'special', 'class_id'
	];

	public function Class(){
		return $this->belongsTo('App\Classpj');
	}
}

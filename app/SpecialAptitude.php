<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecialAptitude extends Model
{
	protected $table = 'special_aptitudes';
	public $timestamps = false;

	protected $fillable = [
		'name', 'description', 'class_id'
	];

	public function classpj(){
		return $this->belongsTo('App\Classpj');
	}

	public function characters(){
		return $this->belongsToMany('App\Character', 'characters_special_aptitudes');
	}
}

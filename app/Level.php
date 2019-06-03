<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
	protected $table = 'levels';
	public $timestamps = false;

	protected $fillable = [
		'num', 'exp_limit'
	];

	public function characters(){
		return $this->hasMany('App\Character');
	}
}

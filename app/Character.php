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
		return $this->belongsTo('App\Classpj');
	}

	public function money(){
		return $this->belongsTo('App/Money');
	}

	public function abilities(){
		return $this->hasMany('App\Ability');
	}
}

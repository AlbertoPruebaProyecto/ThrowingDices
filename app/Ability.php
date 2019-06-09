<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
	protected $table = 'abilities';
	public $timestamps = false;

	protected $guarded = array();

	public function character(){
		return $this->belongsTo('App\Character');
	}

	public function totalRank(){
		return $this->rank + $this->character->modCharacter($this->skill_base);
	}

	public function rankUp(){
		if ($this->rank == 0 && $this->special_class) {
			$this->rank += 4;
		}else{
			$this->rank += 1;
		}
		$this->save();
	}
}

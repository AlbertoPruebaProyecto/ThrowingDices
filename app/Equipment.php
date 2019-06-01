<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
	protected $table = 'equipments';
	public $timestamps = false;

	protected $fillable = [
		'name', 'weight', 'bonus_armor', 'penality', 'range', 'damage', 'critical', 'type', 'desc', 'money_id'
	];

	public function money(){
		return $this->belongsTo('App\Money');
	}

	public function isArmor(){
		return $this->is_armor == 1;
	}

	public function isWeapon(){
		return $this->is_weapon == 1;
	}

	public function isOther(){
		return $this->is_other == 1;
	}
}

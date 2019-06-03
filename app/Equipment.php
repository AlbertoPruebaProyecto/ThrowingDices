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

	public function getTypeEquipment(){
		return explode(';', $this->type)[1];
	}
}

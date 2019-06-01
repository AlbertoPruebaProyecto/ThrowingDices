<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
	protected $table = 'money';
	public $timestamps = false;

	protected $fillable = [
		'gold', 'silver', 'copper'
	];

	public function object(){
		return $this->hasMany('App\Object');
	}
}

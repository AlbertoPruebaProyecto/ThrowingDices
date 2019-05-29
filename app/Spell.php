<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
	protected $table = 'spells';
	public $timestamps = false;

	protected $fillable = [
		'name', 'school', 'description'
	];
}

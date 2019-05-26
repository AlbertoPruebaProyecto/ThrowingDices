<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
	protected $table = 'races';
	public $timestamps = false;

	protected $fillable = [
		'name', 'update_skills'
	];
}

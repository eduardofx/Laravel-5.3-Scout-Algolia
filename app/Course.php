<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	use Searchable;

	protected $fillable = [
		'name',
		'description',
		'author'
	];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeProvider extends Model
{
     protected $fillable = [
		'name', 'description',
	];
}

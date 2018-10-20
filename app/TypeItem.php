<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeItem extends Model
{
     protected $fillable = [
		'name', 'description',
	];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sgcs extends Model
{
    protected $fillable = [
		'name', 'description', 'file',
	];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $fillable = [
		'name', 'phone', 'date_call', 'user_id',
	];

    public function user()
    {
    	return $this->belongsTo(User::Class);
    }
}

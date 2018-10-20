<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
		'name', 'email', 'phone', 'cell_phone', 'section', 'provider_id',
	];

    public function provider()
    {
    	return $this->belongsTo(Provider::Class);
    }
}

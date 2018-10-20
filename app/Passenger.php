<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    protected $fillable = [
		'name', 'last_name_f', 'last_name_m', 'rut', 'pasaporte', 'birth_date', 'phone', 'email', 'address', 'comuna', 'city', 'country', 'client_id',
	];

    public function client()
    {
    	return $this->belongsTo(Client::Class);
    }
}

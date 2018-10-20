<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
		'name', 'last_name_f', 'last_name_m', 'rut', 'contact', 'phone', 'email', 'giro', 'address', 'comuna', 'city', 'country', 'tipo_cliente', 'user_id',
	];

    public function user()
    {
    	return $this->belongsTo(User::Class);
    }
}

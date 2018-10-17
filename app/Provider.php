<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $filable = [
		'name', 'prefix', 'code_iata', 'description', 'fee_basic', 'fee_bussinnes', 'file', 'activo', 'type_provider_id',
	];

    public function type_provider()
    {
    	return $this->belongsTo(TypeProvider::Class);
    }
}

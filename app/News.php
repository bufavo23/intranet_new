<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
		'title', 'subtitle', 'news','type', 'user_id', 'provider_id'
	];

	public function user()
    {
    	return $this->belongsTo(User::Class);
    	
    }

    public function provider()
    {
    	return $this->belongsTo(Provider::Class);
    	
    }
   
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = [
		'name', 'description', 'file', 'type_item_id',
	];

    public function typeItem()
    {
    	return $this->belongsTo(TypeItem::Class);
    }
}

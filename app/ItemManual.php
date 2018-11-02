<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemManual extends Model
{
	protected $fillable = [
		'name', 'description', 'file', 'type_item_id',
	];

    public function type_item()
    {
    	return $this->belongsTo(TypeItem::Class);
    }
}

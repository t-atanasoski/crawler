<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Entities extends Model
{
    protected $table = 'entities';

    public function pages()
    {
    	return $this->belongsToMany('App\Database\Models\Pages', 'page_entities', 'entity_id', 'page_id');
    }

    public function entityType()
    {
    	return $this->belongsTo('App\Database\Models\EntityTypes', 'entity_type_id');
    }
}

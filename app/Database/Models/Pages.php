<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected $table = 'pages';

    public function source()
    {
        return $this->belongsTo('App\Database\Models\Sources', 'source_id');
    }

    public function entities()
    {
    	return $this->belongsToMany('App\Database\Models\Entities', 'page_entities', 'page_id', 'entity_id');
    }
}

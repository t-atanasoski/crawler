<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

class EntityMapper extends Model
{
    protected $table = 'entity_mapper';

    public function entity()
    {
        return $this->belongsTo('App\Database\Models\Entities', 'entity_id');
    }
}

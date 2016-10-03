<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

class EntityTypes extends Model
{
    protected $table = 'entity_types';

    public function entities()
    {
        return $this->hasMany('App\Database\Models\Entities', 'entity_type_id');
    }
}

<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Sources extends Model
{
    protected $table = 'sources';

    public function pages()
    {
        return $this->hasMany('App\Database\Models\Pages', 'source_id');
    }

    public function listPages()
    {
        return $this->hasMany('App\Database\Models\Pages', 'source_id')->where('type', 'list');
    }

    public function detailsPages()
    {
        return $this->hasMany('App\Database\Models\Pages', 'source_id')->where('type', 'details');
    }
}

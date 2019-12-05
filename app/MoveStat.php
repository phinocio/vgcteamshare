<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoveStat extends Model
{
    public function move() {
        return $this->belongsTo('App\Move');
    }

    public function type() {
        return $this->belongsTo('App\Type');
    }

    public function category()
    {
        return $this->belongsTo('App\MoveCategory', 'category_id');
    }
}

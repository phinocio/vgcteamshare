<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function moves() {
        return $this->hasMany('App\Move');
    }

    public function move_stats()
    {
        return $this->hasMany('App\MoveStat');
    }
}

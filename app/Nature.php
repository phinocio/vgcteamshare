<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nature extends Model
{
    function pokemon() {
        return $this->belongsToMany('App\Pokemon');
    }
}

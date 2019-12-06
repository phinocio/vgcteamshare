<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    public function teams() {
        return $this->hasMany('App\Teams');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Move extends Model
{
	public function stats() {
		return $this->hasOne('App\MoveStat');
	}
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $with = ['author', 'pokemon.move1.stats', 'pokemon.move2.stats', 'pokemon.move3.stats', 'pokemon.move4.stats'];

    public function author() 
    {
        return $this->belongsTo('App\User');
    }

    public function pokemon() 
    {
        return $this->belongsToMany('App\Pokemon', 'team_data', 'team_id', 'pokemon_id')
            ->using('App\TeamData')->withPivot('evs', 'ivs');
    }
}

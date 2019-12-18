<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
	//
	public $timestamps = false;

	public function teams()
	{
		return $this->belongsToMany('App\Team', 'team_data', 'pokemon_id', 'team_id')
			->using('App\TeamData');
	}

	public function ability() 
	{
		return $this->belongsToMany('App\Ability', 'team_data', 'pokemon_id', 'ability_id')
			->using('App\TeamData');
	}

	public function nature() 
	{
		return $this->belongsToMany('App\Nature', 'team_data', 'pokemon_id', 'nature_id')
			->using('App\TeamData');
	}

	public function item()
	{
		return $this->belongsToMany('App\Item', 'team_data', 'pokemon_id', 'item_id')
			->using('App\TeamData');
	}

	public function move1()
	{
		return $this->belongsToMany('App\Move', 'team_data', 'pokemon_id', 'move1_id')
			->using('App\TeamData');
	}

	public function move2()
	{
		return $this->belongsToMany('App\Move', 'team_data', 'pokemon_id', 'move2_id')
			->using('App\TeamData');
	}

	public function move3()
	{
		return $this->belongsToMany('App\Move', 'team_data', 'pokemon_id', 'move3_id')
			->using('App\TeamData');
	}

	public function move4()
	{
		return $this->belongsToMany('App\Move', 'team_data', 'pokemon_id', 'move4_id')
			->using('App\TeamData');
	}
}

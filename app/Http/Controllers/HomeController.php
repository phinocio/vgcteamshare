<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;
use App\Item;
use App\Ability;
use App\Nature;
use App\Move;
use App\TeamData;
use App\Team;
use App\Http\Resources\Team as TeamResource;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = "Alakazam-Mega @ Alakazite  
Ability: Trace  
EVs: 104 HP / 44 Atk / 100 Def / 108 SpA / 4 SpD / 96 Spe  
Timid Nature  
IVs: 0 Atk  
- Encore  
- Calm Mind  
- Dazzling Gleam  
- Disable  

Celesteela @ Assault Vest  
Ability: Beast Boost  
EVs: 80 HP / 76 Def / 116 Spe  
Mild Nature  
- Air Slash  
- Energy Ball  
- Double-Edge  
- Autotomize

";

        // Split the data first to get each pokemon into its own array...
        $aData = preg_split('/\n\n/', trim($data));
        // ... then split again to get a nested array for each line of data for each Pokemon.
        for($i = 0; $i < count($aData); $i++) {
            $aData[$i] = preg_split('/\n/', trim($aData[$i]));
        }
        $pokemon = [];
        $i = 0;
        foreach($aData as $poke) {
            $pokemon[$i] = 
            [   
                'team_id' => 1,
                'pokemon_id' => Pokemon::whereName(trim(explode('@', $poke[0])[0]))->first()->id,
                'item_id' => Item::whereName(trim(explode('@', $poke[0])[1]))->first()->id,
                'ability_id' => Ability::whereName(trim(explode(':', $poke[1])[1]))->first()->id,
                'evs' => trim(explode(':', $poke[2])[1]),
                'nature_id' => Nature::whereName(explode(' ', $poke[3])[1] == 'Nature' ? explode(' ', $poke[3])[0] : 'Serious')->first()->id,
                'ivs' => explode(':', $poke[4])[0] == 'IVs' ? trim(explode(':', $poke[4])[1]) : '',
                'move1_id' => Move::whereName(explode(':', $poke[4])[0] == 'IVs' ? trim(str_replace('- ', '',  $poke[5])) : trim(str_replace('- ', '',  $poke[4])))->first()->id,
                'move2_id' => Move::whereName(explode(':', $poke[4])[0] == 'IVs' ? trim(str_replace('- ', '',  $poke[6])) : trim(str_replace('- ', '',  $poke[5])))->first()->id,
                'move3_id' => Move::whereName(explode(':', $poke[4])[0] == 'IVs' ? trim(str_replace('- ', '',  $poke[7])) : trim(str_replace('- ', '',  $poke[6])))->first()->id,
                'move4_id' => Move::whereName(explode(':', $poke[4])[0] == 'IVs' ? trim(str_replace('- ', '',  $poke[8])) : trim(str_replace('- ', '',  $poke[7])))->first()->id
            ];
            $i++;
        }

        // foreach($pokemon as $mon) {
        //     TeamData::create($mon);
        // }

        $team = Team::first();
    
        return new TeamResource($team);
    }
}

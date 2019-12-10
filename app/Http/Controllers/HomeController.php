<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\Http\Resources\Team as TeamResource;

use App\Helpers\ShowdownExportParser;

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
        $data = 'Alakazam-Mega @ Alakazite  
Ability: Trace  
EVs: 104 HP / 44 Atk / 100 Def / 108 SpA / 4 SpD / 96 Spe  
Timid Nature  
IVs: 0 Atk  
- Encore  
- Calm Mind  
- Dazzling Gleam  
- Disable';

      //  dd(urlencode($data));
        $pokemon = ShowdownExportParser::parse($data);
        dd($pokemon);
        $team = Team::first();
    
		return new TeamResource($team);
    }
}

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
        $team = Team::first();
    
		return new TeamResource($team);
    }
}

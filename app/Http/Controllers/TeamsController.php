<?php

namespace App\Http\Controllers;

use App\Team;
use App\Format;
use App\Http\Resources\Team as TeamResource;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index($slug) {
        $team = new TeamResource(Team::whereSlug($slug)->first());
        $team = $team->toArray($team);
        
        if ($team['private'] && $team['author']->id != (auth()->user()->id ?? null)) {
            abort(403, 'You can\'t view that team!');
        }

        return view('viewTeam', ['team' => $team]);
    }

    public function myTeams(Request $request) {
        
        $formats = Format::all();
        if ($request->user() !== null) {
            $teams = Team::latest()->whereAuthorId($request->user()->id)->paginate(10);
            $myTeams = [];
            foreach ($teams as $team) {
    
                $data = new TeamResource($team);
                array_push($myTeams, $data->toArray($team));
            }
        } else {
            $myTeams = null;
            $teams = null;
        }
        return view('myTeams', ['teams' => $myTeams, 'formats' => $formats, 'paginate' => $teams]);
    }

    // atm only update private.
    public function update($team, Request $request) {
        $team = Team::whereId($team)->update(['private' => (bool)$request->input('private')]);

        return $team;
    }
}

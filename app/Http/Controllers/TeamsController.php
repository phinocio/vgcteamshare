<?php

namespace App\Http\Controllers;

use App\Team;
use App\Format;
use App\Http\Resources\Team as TeamResource;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index() {
        // dunno what do here. Search?
    }

    public function myTeams(Request $request) {
        $teams = Team::whereAuthorId($request->user()->id)->paginate(10);
        $formats = Format::all();
        $newestTeams = [];
        foreach ($teams as $team) {

            $data = new TeamResource($team);
            array_push($newestTeams, $data->toArray($team));
        }
        return view('myTeams', ['teams' => $newestTeams, 'formats' => $formats, 'paginate' => $teams]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
	   $this->middleware('auth')->except('index');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$teams = Team::latest()->take(5)->get();
		$newestTeams = [];
		foreach($teams as $team) {

			$data = new TeamResource($team);
			array_push($newestTeams, $data->toArray($team));
		}
		//dd($newestTeams);
		return view('home', ['teams' => $newestTeams]);
	}
}

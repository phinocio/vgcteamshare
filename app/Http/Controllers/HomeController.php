<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\Format;
use App\Helpers\ShowdownExportParser;
use App\Http\Requests\StoreTeam;
use App\Http\Resources\Team as TeamResource;
use App\Helpers\CreateSlug;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	   
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$teams = Team::latest()->take(5)->get();
		$formats = Format::all();
		$newestTeams = [];
		foreach($teams as $team) {

			$data = new TeamResource($team);
			array_push($newestTeams, $data->toArray($team));
		}
		return view('home', ['teams' => $newestTeams, 'formats' => $formats]);
	}

	public function store(StoreTeam $request) 
	{
		$valid = $request->validated();
		$pokemon = ShowdownExportParser::parse($valid['importTeam']);
		$slug = CreateSlug::new($valid['teamName']);
		$team = Team::create([
			'author_id' => 1, 
			'name' => $valid['teamName'], 
			'description' => $valid['description'],
			'format_id' => $valid['format'],
			'slug' => $slug // make a slug function
		]);
		$team->pokemon()->sync($pokemon);

		return redirect()->route('teams', $slug);
	}
}

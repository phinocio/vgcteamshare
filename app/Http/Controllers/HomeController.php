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
		$teams = Team::latest()->wherePrivate(false)->paginate(10);
		$formats = Format::all();
		$newestTeams = [];
		foreach($teams as $team) {

			$data = new TeamResource($team);
			array_push($newestTeams, $data->toArray($team));
		}
		return view('home', ['teams' => $newestTeams, 'formats' => $formats, 'paginate' => $teams]);
	}

	// TODO: Move to TeamsController.
	public function store(StoreTeam $request) 
	{	
		$valid = $request->validated();
		$slug = CreateSlug::new($valid['teamName']);
		$pokemon = ShowdownExportParser::parse($valid['importTeam']);
		$team = Team::create([
			'author_id' => $request->user() ? $request->user()->id : null, 
			'name' => $valid['teamName'], 
			'description' => $valid['description'],
			'format_id' => $valid['format'],
			'slug' => $slug,
			'private' => isset($valid['private']) ? true : false
		]);
		$team->pokemon()->sync($pokemon);

		return redirect()->route('teams', $slug);
	}
}

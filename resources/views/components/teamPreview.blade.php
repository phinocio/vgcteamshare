@if(!empty($teams))
@foreach($teams as $team)
<div class="team-preview">
	<div class="info">
		<div class="team-name">
			<a href="/teams/{{ $team['slug'] }}">{{ $team['name'] }}</a>

		</div>

		<div class="meta-info">
			<span><small>{{ $team['private'] == true ? 'Private team' : '' }}</small></span>
			<span><small>{{ $team['rental_code'] ?? 'No Rental Code' }}</small></span>
			<span><small><i>{{ $team['created']->diffForHumans() }}</i></small></span>
			<span><small><a href="/">{{ $team['author'] }}</a></small></span>
			<span><b>{{ $team['format'] }}</b></span>
		</div>
	</div>

	<div class="team">
		@foreach($team['pokemon'] as $pokemon)
		<div class="pokemon">
			<img src="/images/pokemon/sprites/{{ $pokemon->image }}" />
			<p class="pokemon-name">{{ $pokemon->name }}</p>
		</div>
		@endforeach
	</div>
</div>
@endforeach

@else
<div class="team-preview">
	No Teams to display at the moment.
</div>
@endif
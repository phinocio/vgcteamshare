@if(!empty($teams))
@foreach($teams as $team)
<div class="team-preview">
	<div class="info">
		<div class="team-name">
			<a href="/teams/{{ $team['slug'] }}">{{ $team['name'] }}</a>

		</div>

		<div class="meta-info">
			<span><small>{{ $team['rental_code'] ?? 'No Rental Code' }}</small></span>
			<span><small><i>{{ $team['created']->diffForHumans() }}</i></small></span>
			<span><small><a href="/">{{ $team['author'] }}</a></small></span>
			<span class="team-format"><b>{{ $team['format'] }}</b></span>
			<div class="custom-control custom-switch custom-control-inline">
				<input type="checkbox" class="custom-control-input" id="privateTeam-{{ $team['slug'] }}" {{ $team['private'] ? 'checked' : '' }} onClick="updatePrivate(this.parentNode.nextSibling.nextSibling.innerText, this.checked)"/>
				<label class="custom-control-label" for="privateTeam-{{ $team['slug'] }}"><small>
					{{ __('Private') }}</small>
				</label>
			</div>
			<span hidden>{{ $team['id'] }}</span>
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

<script>
// Super temporary until I remake front-end in React..
async function updatePrivate(teamID, private) {
	try {
		await fetch(`/api/teams/${teamID}`, {
			method: 'post',
			headers: {
				"Content-type": "application/json;",
				"Accept": "application/json;"
			},
			body: JSON.stringify({
				'private': private
			})
		});
	} catch(e) {
		console.log(e.message);
	}
}


</script>
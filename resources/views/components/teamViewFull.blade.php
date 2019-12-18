<div class="team-view">
	<div class="info">
		<div class="team-name">
			<h2>{{ $team['name'] }}</h2>
			<span>{{ $team['format'] }}</span>
		</div>

		<div class="meta-info">
			<span><small>{{ $team['private'] == true ? 'Private team' : '' }}</small></span>
			<span><small>{{ $team['rental_code'] ?? 'No Rental Code' }}</small></span>
			<span><small><i>{{ $team['created']->diffForHumans() }}</i></small></span>
			<span class="author"><small>{{ $team['author']->name ?? 'Anonymous' }}</small></span>
			
		</div>
	</div>
	<hr />
	<div class="team">
		@foreach($team['pokemon'] as $pokemon)
		<div class="pokemon">
			<div class="image">
				<img src="/images/pokemon/sprites/{{ $pokemon->image }}" />
				<span class="name">{{ $pokemon->name }}</span>
				<span class="item" title="{{ $pokemon->item[0]->description }}">{{ $pokemon->item[0]->name }}</span>
			</div>

			<div class="stats">	
				<p class="evs">{{ $pokemon->pivot->evs}}</p>
				<p class="stat"><small>hp</small> <span>{{ $pokemon->hit_points }}</span></p>
				<p class="stat"><small>atk</small> <span>{{ $pokemon->attack }}</span></p>
				<p class="stat"><small>def</small> <span>{{ $pokemon->defense }}</span></p>
				<p class="stat"><small>spa</small> <span>{{ $pokemon->special_attack }}</span></p>
				<p class="stat"><small>spd</small> <span>{{ $pokemon->special_defense }}</span></p>
				<p class="stat"><small>spe</small> <span>{{ $pokemon->speed }}</span></p>
			</div>

			<div class="moves">
				<span>{{ $pokemon->move1[0]->name }}<br/></span>
				<span>{{ $pokemon->move2[0]->name }}<br/></span>
				<span>{{ $pokemon->move3[0]->name }}<br/></span>
				<span>{{ $pokemon->move4[0]->name }}<br/></span>
			</div>
		</div>
		@endforeach
	</div>
</div>
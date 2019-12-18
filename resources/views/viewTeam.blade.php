@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            @include('components.teamViewFull', ['team' => $team])
        </div>
        <div class="col-md-5">
            <h2>Showdown Export</h2>
            <hr />
            <div class="export">
                @foreach($team['pokemon'] as $pokemon)
                    <div class="pokemon-export">
                        <span>{{ $pokemon->name }} @ {{ $pokemon->item[0]->name }}<br/></span>
                        <span>Ability: {{ $pokemon->ability[0]->name }}<br/></span>
                        <span>Level: {{ $pokemon->pivot->level }}<br/></span>
                        <span>EVs: {{ $pokemon->pivot->evs }}<br/></span>
                        <span>{{ $pokemon->nature[0]->name }} Nature<br/></span>
                        @if($pokemon->pivot->ivs)<span>IVs: {{ $pokemon->pivot->ivs }}<br/></span>@endif
                        <span>- {{ $pokemon->move1[0]->name }}<br/></span>
                        <span>- {{ $pokemon->move2[0]->name }}<br/></span>
                        <span>- {{ $pokemon->move3[0]->name }}<br/></span>
                        <span>- {{ $pokemon->move4[0]->name }}<br/></span>
                        <br />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
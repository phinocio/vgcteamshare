@extends('layouts.app')

@section('title', 'My Teams')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>My Teams</h2>
            <hr />
            @include('components.myTeamsPreview', ['teams' => $teams])

            @if($paginate != null)
            {{ $paginate->links() }}
            @endif
        </div>
        <div class="col-md-4">
            <h2>New Team</h2>
            <hr />

            @include('components.uploadTeamForm', ['formats' => $formats])
        </div>
    </div>
</div>
@endsection
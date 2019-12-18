@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Newest Teams</h2>
            <hr />
            @include('components.teamPreview', ['teams' => $teams])
            {{ $paginate->links() }}
        </div>
        <div class="col-md-4">
            <h2>New Team</h2>
            <hr />

            @include('components.uploadTeamForm', ['formats' => $formats])
        </div>
    </div>
</div>
@endsection
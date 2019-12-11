@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Newest Teams</h2>
            <hr />
            @include('components.teamPreview', ['teams' => $teams])
        </div>
        <div class="col-md-4">
            <h2>New Team</h2>
            <hr />
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="teamName" aria-describedby="nameHelp" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>VGC 2020</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" id="rentalCode" aria-describedby="codeHelp" placeholder="Rental code...">
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="description" aria-describedby="descriptionHelp" placeholder="Say a bit about the team..."></textarea>
                </div>

                <div class="form-group">
                    <textarea class="form-control" id="importTeam" rows="5" placeholder="Enter showdown export here..."></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection
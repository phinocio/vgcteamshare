@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            @yield('code') - @yield('message')
        </div>
    </div>
</div>
@endsection
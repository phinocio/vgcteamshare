<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VGCTeamshare') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="content">
                <p class="brand">VGC Teamshare</p>
            </div>
            <div class="content">
                <p>
                    <img src="/images/pokemon/sprites/excadrill.gif" />
                    <img src="/images/pokemon/sprites/whimsicott.gif" />
                    <img src="/images/pokemon/sprites/lapras.gif" />
                    <img src="/images/pokemon/sprites/arcanine.gif" />
                    <img src="/images/pokemon/sprites/grimmsnarl.gif" />
                    <img src="/images/pokemon/sprites/gyarados.gif" />
                </p>
            </div>
            <div class="content">
                <p>coming soon...</p>
            </div>
        </div>
    </div>
</body>

</html>
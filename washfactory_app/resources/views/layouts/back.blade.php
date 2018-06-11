<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Wasfactory Admin') }}</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body id="admin-body">
        <nav id="admin-nav">
            <div id="logo-section">
                <img src="{{asset('img/logo-white.png')}}" alt="Logo of Washfactory">
            </div>
            <div id="nav-links">
                <a class="nav-link" href="{{route('admin.devices')}}">Toestellen</a>
                <a class="nav-link" href="{{route('admin.locations')}}">Locaties</a>
                <a class="nav-link" href="{{route('admin.users')}}">Gebruikers</a>
                <a class="nav-link" href="#">Tips & Tricks</a>
            </div>
            
        </nav>
        <main>
            @yield('content')
        </main>
       
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('scripts')
    </body>    
</html>

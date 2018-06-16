<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1,minimum-scale=1,user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Washfactory') }}</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>
        <main>
            @yield('content')
        </main>
        <nav class="navbar align-items-center fixed-bottom">
            <div id="navbar-row" class="row">
                <a class="col align-items-center" href="{{route('home')}}">
                    <i class="fas fa-home fa-2x"></i><br>
                    Home
                </a>
                <a class="col align-items-center" href="#">
                    <i class="fas fa-tachometer-alt fa-2x"></i><br>
                    Programma's
                </a>                
                <a class="col align-items-center" href="{{route('articles.index')}}">
                    <i class="fas fa-lightbulb fa-2x"></i><br>
                    Tips & tricks
                </a>
                <div class="col align-items-center" data-toggle="modal" data-target="#menu_modal">
                    <i class="fas fa-cog fa-2x"></i><br>
                    Instellingen
                </div>

            </div>
        </nav>
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('scripts')
    </body>    
</html>
@include('front.modals.menu')

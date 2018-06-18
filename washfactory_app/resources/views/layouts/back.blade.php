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
                <a href="{{route('admin.devices')}}"><img src="{{asset('img/logo-white.png')}}" alt="Logo of Washfactory"></a>
            </div>
            <div id="nav-links">
                <a id="devices-nav-link" class="nav-link" href="{{route('admin.devices')}}">
                    <img class="non-active-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUyNS4xNTMgNTI1LjE1MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTI1LjE1MyA1MjUuMTUzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjI0cHgiIGhlaWdodD0iMjRweCI+CjxnPgoJPHBhdGggZD0iTTE4OC4yNzgsMzg5LjM3OWM0MC45ODQsNDAuOTg0LDEwNy42NTYsNDAuOTg0LDE0OC42NCwwczQwLjk4NC0xMDcuNjU2LDAtMTQ4LjU1M0wxODguMjc4LDM4OS4zNzl6IE00MjAuMTExLDAuMzA2ICAgTDEwNS4wNjMsMEM3NS44OTUsMCw1Mi41MjYsMjMuNDEzLDUyLjUyNiw1Mi40NzF2NDIwLjE4OGMwLDI5LjA4LDIzLjM2OSw1Mi40OTMsNTIuNTM3LDUyLjQ5M2gzMTUuMDQ4ICAgYzI5LjE0NiwwLDUyLjUxNS0yMy40MTMsNTIuNTE1LTUyLjQ3MVY1Mi40NzFDNDcyLjY0OCwyMy40MTMsNDQ5LjI1NywwLjMwNiw0MjAuMTExLDAuMzA2eiBNMjEwLjA3Miw1Mi40NzEgICBjMTQuNDY0LDAsMjYuMjgsMTEuODE2LDI2LjI4LDI2LjMyM2MwLDE0LjQyLTExLjgxNiwyNi4yMzYtMjYuMjgsMjYuMjM2Yy0xNC40NDIsMC4wMjItMjYuMjU4LTExLjc5NC0yNi4yNTgtMjYuMjE0ICAgQzE4My44MTQsNjQuMjg3LDE5NS42Myw1Mi40NzEsMjEwLjA3Miw1Mi40NzF6IE0xMzEuMjk5LDUyLjQ3MWMxNC40MiwwLDI2LjIzNiwxMS44MTYsMjYuMjM2LDI2LjMyMyAgIGMwLDE0LjQyLTExLjgxNiwyNi4yMzYtMjYuMjM2LDI2LjIzNnMtMjYuMjM2LTExLjgxNi0yNi4yMzYtMjYuMjM2QzEwNS4wNjMsNjQuMjg3LDExNi44NzksNTIuNDcxLDEzMS4yOTksNTIuNDcxeiAgICBNMjYyLjU4Nyw0NzIuNjgxYy04Ni45MTMsMC0xNTcuNTI0LTcwLjY1NS0xNTcuNTI0LTE1Ny42MTFjMC04Ni44OTEsNzAuNjExLTE1Ny41MjQsMTU3LjUyNC0xNTcuNTI0ICAgYzg2LjkzNSwwLDE1Ny41MjQsNzAuNjU1LDE1Ny41MjQsMTU3LjUyNEM0MjAuMTExLDQwMi4wMjYsMzQ5LjUyMiw0NzIuNjgxLDI2Mi41ODcsNDcyLjY4MXoiIGZpbGw9IiNGRkZGRkYiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                    <img class="active-icon" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMS4xLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDUyNS4xNTMgNTI1LjE1MyIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTI1LjE1MyA1MjUuMTUzOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjMycHgiIGhlaWdodD0iMzJweCI+CjxnPgoJPHBhdGggZD0iTTE4OC4yNzgsMzg5LjM3OWM0MC45ODQsNDAuOTg0LDEwNy42NTYsNDAuOTg0LDE0OC42NCwwczQwLjk4NC0xMDcuNjU2LDAtMTQ4LjU1M0wxODguMjc4LDM4OS4zNzl6IE00MjAuMTExLDAuMzA2ICAgTDEwNS4wNjMsMEM3NS44OTUsMCw1Mi41MjYsMjMuNDEzLDUyLjUyNiw1Mi40NzF2NDIwLjE4OGMwLDI5LjA4LDIzLjM2OSw1Mi40OTMsNTIuNTM3LDUyLjQ5M2gzMTUuMDQ4ICAgYzI5LjE0NiwwLDUyLjUxNS0yMy40MTMsNTIuNTE1LTUyLjQ3MVY1Mi40NzFDNDcyLjY0OCwyMy40MTMsNDQ5LjI1NywwLjMwNiw0MjAuMTExLDAuMzA2eiBNMjEwLjA3Miw1Mi40NzEgICBjMTQuNDY0LDAsMjYuMjgsMTEuODE2LDI2LjI4LDI2LjMyM2MwLDE0LjQyLTExLjgxNiwyNi4yMzYtMjYuMjgsMjYuMjM2Yy0xNC40NDIsMC4wMjItMjYuMjU4LTExLjc5NC0yNi4yNTgtMjYuMjE0ICAgQzE4My44MTQsNjQuMjg3LDE5NS42Myw1Mi40NzEsMjEwLjA3Miw1Mi40NzF6IE0xMzEuMjk5LDUyLjQ3MWMxNC40MiwwLDI2LjIzNiwxMS44MTYsMjYuMjM2LDI2LjMyMyAgIGMwLDE0LjQyLTExLjgxNiwyNi4yMzYtMjYuMjM2LDI2LjIzNnMtMjYuMjM2LTExLjgxNi0yNi4yMzYtMjYuMjM2QzEwNS4wNjMsNjQuMjg3LDExNi44NzksNTIuNDcxLDEzMS4yOTksNTIuNDcxeiAgICBNMjYyLjU4Nyw0NzIuNjgxYy04Ni45MTMsMC0xNTcuNTI0LTcwLjY1NS0xNTcuNTI0LTE1Ny42MTFjMC04Ni44OTEsNzAuNjExLTE1Ny41MjQsMTU3LjUyNC0xNTcuNTI0ICAgYzg2LjkzNSwwLDE1Ny41MjQsNzAuNjU1LDE1Ny41MjQsMTU3LjUyNEM0MjAuMTExLDQwMi4wMjYsMzQ5LjUyMiw0NzIuNjgxLDI2Mi41ODcsNDcyLjY4MXoiIGZpbGw9IiNmZjZiNmIiLz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8Zz4KPC9nPgo8L3N2Zz4K" />
                    <span class="nav-link-text">Toestellen</span>
                </a>
                <a id="locations-nav-link" class="nav-link" href="{{route('admin.locations')}}"><i class="fas fa-map-marker"></i><span class="nav-link-text">Locaties</span></a>
                <a id="users-nav-link" class="nav-link" href="{{route('admin.users')}}"><i class="fas fa-user"></i><span class="nav-link-text">Gebruikers</span></a>
                <a id="articles-nav-link" class="nav-link" href="{{route('admin.articles')}}"><i class="fas fa-lightbulb"></i><span class="nav-link-text">Tips & Tricks</span></a>
                <a id="articles-nav-link" class="nav-link"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i><span class="nav-link-text">Uitloggen</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            
        </nav>
        <main>
            @yield('content')
        </main>
       
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('scripts')
    </body>    
</html>

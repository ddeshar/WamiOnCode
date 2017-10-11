<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Wami On Code</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar has-shadow">
            <div class="container">

                <div class="nav-left">
                    <a class="nav-item" href="{{route('home')}}">
                        <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma logo">
                    </a>
                    <a class="nav-item is-tab is-hidden-mobile">Learn</a>
                    <a class="nav-item is-tab is-hidden-mobile">Love</a>
                    <a class="nav-item is-tab is-hidden-mobile">Share</a>
                </div>

            @if(Auth::guest())
                <div class="nav-right">
                    <a class="nav-item is-tab is-hidden-mobile">
                        <i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>&nbsp; Login
                    </a>
                    <a class="nav-item is-tab is-hidden-mobile">
                        <i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>&nbsp; Register
                    </a>
                </div>
            @else
                <div class="dropdown is-hoverable is-right">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            <figure class="image is-24x24" style="margin-right: 8px;">
                                <img src="http://bulma.io/images/jgthms.png">
                            </figure> Chhy Riden
                        </a>
                    </div>
                    <div class="dropdown-menu">
                        <div class="dropdown-content">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-globe fa-fw" aria-hidden="true"></i>&nbsp; View Sites
                            </a>
                            <a class="dropdown-item is-active" href="#">
                                <i class="fa fa-bell fa-fw" aria-hidden="true"></i>&nbsp; Notifications
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-sliders fa-fw" aria-hidden="true"></i>&nbsp; Settings
                            </a>
                            <hr class="m-t-5 m-b-5">
                            <a class="dropdown-item" href="#">
                                <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>&nbsp; Logout
                            </a>
                        </div>
                    </div>
                </div>
            @endif


    <div class="navbar-menu">
        <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable ">
                    <span class="navbar-link" style="cursor: pointer;">User</span>
                    <div class="navbar-dropdown is-right">
                        <a class="navbar-item" href="/logout">
                            Long text logout
                        </a>
                    </div>
                </div>
        </div>
    </div>
    
            </div>


        </nav>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ env('APP_NAME') }}</title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
<script src="{{ asset('js/app.js') }}?v=<?php echo time(); ?>" defer></script>
<script src="{{ asset('js/semantic.min.js') }}" defer></script>
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<style type="text/css">

    .hidden.menu {
        display: none;
    }
    .spacer {
        height: 50px;
    }

    .masthead.segment {
        padding: 1em 0em;
    }
    .masthead .logo.item img {
        margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
        margin-left: 0.5em;
    }
    .masthead h1.ui.header {
        margin-top: 3em;
        margin-bottom: 0em;
        font-size: 4em;
        font-weight: normal;
    }
    .masthead h2 {
        font-size: 1.7em;
        font-weight: normal;
    }

    .ui.vertical.stripe {
        padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
        font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
        margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
        clear: both;
    }
    .ui.vertical.stripe p {
        font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
        margin: 3em 0em;
    }

    .quote.stripe.segment {
        padding: 0em;
    }
    .quote.stripe.segment .grid .column {
        padding-top: 5em;
        padding-bottom: 5em;
    }

    .footer.segment {
        padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
        display: none;
    }

    @media only screen and (max-width: 700px) {
        .ui.fixed.menu {
            display: none !important;
        }
        .secondary.pointing.menu .item,
        .secondary.pointing.menu .menu {
            display: none;
        }
        .secondary.pointing.menu .toc.item {
            display: block;
        }
        .masthead.segment {
            /* min-height: 350px; */
        }
        .masthead h1.ui.header {
            font-size: 2em;
            margin-top: 1.5em;
        }
        .masthead h2 {
            margin-top: 0.5em;
            font-size: 1.5em;
        }
    }
    .login.column,
    .register.column {
        max-width: 450px;
    }


</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            // fix menu when passed
            $('.masthead')
                .visibility({
                    once: false,
                    onBottomPassed: function() {
                        $('.fixed.menu').transition('fade in');
                    },
                    onBottomPassedReverse: function() {
                        $('.fixed.menu').transition('fade out');
                    }
                });

            // create sidebar and attach to menu open
            $('.ui.sidebar')
                .sidebar('attach events', '.toc.item');

            $('.special.cards .image').dimmer({
                on: 'hover'
            });

        });
    </script>
</head>
<body>


        <!-- Following Menu -->
        <div class="ui large top fixed hidden menu">
            <div class="ui container">
                <a class="active item">Home</a>
                <a class="item" href="{{route('home')}}">Courses</a>
                <a class="item" href="{{route('paths')}}">Learning Paths</a>
                <a class="item">Get Certified</a>
                @if (Route::has('login'))
                    <div class="right menu">
                        @auth
                            <div class="item">
                                <a class="ui button" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </div>
                            @else
                                <div class="item">
                                    <a class="ui button" href="{{ route('login') }}">Log in</a>
                                </div>
                                <div class="item">
                                    <a class="ui primary button" href="{{ route('register') }}">Sign Up</a>
                                </div>
                            @endauth
                    </div>
                @endif


            </div>
        </div>

        <!-- Sidebar Menu -->
        <div class="ui vertical inverted sidebar menu">
            <a class="active item">Home</a>
            <a class="item" href="{{route('home')}}">Courses</a>
            <a class="item" href="{{route('paths')}}">Learning Paths</a>
            <a class="item">Get Certified</a>
            @if (Route::has('login'))
                <div class="right item">
                    @auth
                        <a class="ui button" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        @else
                            <a class="ui inverted button" href="{{ route('login') }}">Log in</a>
                            <a class="ui inverted button" href="{{ route('register') }}">Sign Up</a>
                        @endauth
                </div>
            @endif
        </div>
        <!-- Page Contents -->
        <div class="pusher" id="app">
            <div class="ui inverted vertical masthead center aligned segment">

                <div class="ui container">
                    <div class="ui large secondary inverted pointing menu">
                        <a class="toc item">
                            <i class="sidebar icon"></i>
                        </a>
                        <a class="active item">Home</a>
                        <a class="item" href="{{route('home')}}">Courses</a>
                        <a class="item" href="{{route('paths')}}">Learning Paths</a>
                        <a class="item">Get Certified</a>
                        @if (Route::has('login'))
                            <div class="right item">
                                @auth
                                    <a class="ui inverted button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    @else
                                        <a class="ui inverted button" href="{{ route('login') }}">Log in</a>
                                        <a class="ui inverted button" href="{{ route('register') }}">Sign Up</a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            @yield('content')

            <div class="ui inverted vertical footer segment">
                <div class="ui container">
                    <div class="ui stackable inverted divided equal height stackable grid">
                        <div class="three wide column">
                            <h4 class="ui inverted header">About</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Sitemap</a>
                                <a href="#" class="item">Contact Us</a>
                                <a href="#" class="item">Religious Ceremonies</a>
                                <a href="#" class="item">Gazebo Plans</a>
                            </div>
                        </div>
                        <div class="three wide column">
                            <h4 class="ui inverted header">Services</h4>
                            <div class="ui inverted link list">
                                <a href="#" class="item">Banana Pre-Order</a>
                                <a href="#" class="item">DNA FAQ</a>
                                <a href="#" class="item">How To Access</a>
                                <a href="#" class="item">Favorite X-Men</a>
                            </div>
                        </div>
                        <div class="seven wide column">
                            <h4 class="ui inverted header">Footer Header</h4>
                            <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @yield('extra-js')
</body>
</html>

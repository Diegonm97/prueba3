<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Intersalud Colombia</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {

            font-size: 2rem;
        }

        .h4 {
            font-size: 2rem;
        }

        .navbar {
            background-color: #1B63BD;
            height: 70px
        }

        .md-form label {
            transition: .2s ease-out;
            color: #757575;
            position: absolute;
            top: 0rem;
            left: 18px;
            font-size: 2rem;
            cursor: text;
        }

        .btn {
            font-size: 1.2rem;
        }

        .navbar-nav {
            padding-left: 700px;
        }

        .navbar-brand {
            align-self: flex-start;
            overflow: visible;
            padding-top: 1.32rem;
            font-size: 2rem;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 14.25rem;
        }

        .fa,
        .fab,
        .fal,
        .far,
        .fas {

            line-height: 1;

        }

        .md-form .prefix {
            font-size: 3rem;
        }


        .prefix~input {
            width: 40rem
        }

        input[type=date],
        input[type=datetime-local],
        input[type=email],
        input[type=number],
        input[type=password],
        input[type=search-md],
        input[type=search],
        input[type=tel],
        input[type=text],
        input[type=time],
        input[type=url],
        textarea.md-textarea {
            font-size: 2rem;
        }

        .links>a {
            color: white;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .fixed-top {

            position: relative;
        }

        footer {
            background-color: #1B63BD;
            margin-top: 0;
        }
    </style>

</head>

<body>

    <div>

        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="/">Intersalud Colombia</a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="navbar-nav top-right links" id="navbarSupportedContent">


                        @guest
                        <a href="{{ route('login') }}">Ingresar</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                        @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>



    </div>
    @yield('content')





    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{asset('js/mdb.js')}}"></script>
</body>

</html> 
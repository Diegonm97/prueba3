<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intersalud del Valle</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
    

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .navbar {
            background-color: transparent;
            height: 70px
        }


        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
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

        .m-b-md {
            margin-bottom: 30px;
        }

        /* Carousel*/

        .carousel,
        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }

        /*Caption*/

        .flex-center {
            color: #fff;
        }

        @media (min-width: 776px) {
            .carousel .view ul li {
                display: inline;
            }

            .carousel .view .full-bg-img ul li .flex-item {
                margin-bottom: 1.5rem;
            }
        }
    </style>
</head>




<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Intersalud Colombia</a>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <div class="navbar-nav top-right links" id="navbarSupportedContent">

                    @if (Route::has('login'))
                    <div class="navbar-nav top-right links" id="navbarSupportedContent">
                        @auth
                        <a href="{{ url('/home') }}">Home</a>
                        @else
                        <a href="{{ route('login') }}">Ingresar</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>


    </nav>
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
            <li data-target="#carousel-example-3" data-slide-to="3"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-grey-strong" style="background-image: url('https://previews.123rf.com/images/qiujusong/qiujusong1703/qiujusong170300381/73337365-Equipos-de-orde-o-Foto-de-archivo.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <center>
                                <img src="https://image.ibb.co/d2g1hw/Logo_orsepal.png" alt="Logo_orsepal" border="0" width="534" height="138">
                            </center>
                            <br>
                            <h1 class="h1-responsive flex-item font-bold">¡Bienvenido!</h1>
                        <li>
                            <div>
                                <p align="center" class="h3-responsive flex-item">Somos una microempresa con más de 20 años de experiencia en el sector de la ganadería,<br>
                                    dedicada a la fabricación y comercialización de equipos de ordeños, piezas complementarias <br>
                                    de dichos equipos y herrajes con presencia en la región pacífica colombiana....</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.First slide -->

            <!-- Second slide -->
            <div class="carousel-item view hm-grey-strong" style="background-image: url('http://www.applelianos.com/wp-content/uploads/2015/09/medium_muchas-manos-entrelazadas.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <center>
                                <img src="https://image.ibb.co/kYscpb/quienes.png" alt="quienes" border="0" />
                            </center>
                            <br>
                            <h1 class="h1-responsive flex-item font-bold">¿Quiénes somos?</h1>
                        </li>
                        <li>
                            <p class="my-4 h3-responsive flex-item" align="center" class="">
                                Somos una microempresa con más de 20 años de experiencia en el sector de la ganadería,<br>
                                dedicada a la fabricación y comercialización de equipos de ordeños, piezas complementarias <br>
                                de dichos equipos y herrajes con presencia en la región pacífica colombiana...
                            </p>
                        </li>
                        <li>
                            <a href="quienes" class="btn btn-indigo btn-lg flex-item" rel="nofollow">Ver más</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-grey-strong" style="background-image: url('https://image.ibb.co/n4v0aG/Maquina_de_orde_o.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <center>
                                <img src="https://image.ibb.co/e2eOUb/productos.png" alt="productos" border="0" />
                            </center>
                            <br>

                            <h1 class="h1-responsive flex-item font-bold">Nuestros productos</h1>
                        </li>
                        <li>
                            <p class="my-4 h3-responsive flex-item" align="center" class="">
                                Aqui podra visualizar los distintos productos que ofrecemos.<br>
                            </p>
                        </li>
                        <li>
                            <a href="productos" class="btn btn-indigo btn-lg flex-item" rel="nofollow">Ver más</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>

            <div class="carousel-item view hm-grey-strong" style="background-image: url('https://image.ibb.co/ehyLaG/CONTACTENOS.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <center>
                                <img src="https://image.ibb.co/mPnA9b/Contacto.png" alt="Contacto" border="0" />
                            </center>
                            <br>
                            <h1 class="h1-responsive flex-item font-bold">Contáctenos</h1>
                        </li>
                        <li>
                            <p class="my-4 h3-responsive flex-item" align="center" class=""">Aqui podra pedir asesoramiento o algun producto<br>
                            que deseé.</p>
                        </li>
                        <li>
                            <a href=" contacto" class="btn btn-indigo btn-lg flex-item" rel="nofollow">Ver más</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Third slide -->

        </div>







        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/mdb.js') }}"></script>


</body>

</html> 
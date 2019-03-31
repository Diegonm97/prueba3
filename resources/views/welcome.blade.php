<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="/assets/img/ISDVlogo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intersalud Colombia</title>

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

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        .top-nav-collapse {
            background-color: #1B63BD;
        }

        footer.page-footer {
            background-color: #002171;
            margin-top: 0;
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

        .card-body {
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        padding: 1.2rem;
}

        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }

        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }

        footer {
            background: #1B63BD;
            color: white;
            border-top: #1B63BD;
        }

        .tagline-sucursal {
            text-shadow: 0 0 12px #000;
            color: #fff;
            text-align: left;
            z-index: 999;
        }



        .fondo-mapa {
            background-position: 0 0;
            background-repeat: no-repeat;
            height: auto;
            width: auto;
            background-size: cover;
        }

        .nosotros {
            padding: 40px 0;
        }

        .row {
            margin-left: -15px;
            margin-right: -15px;
        }



        .map {
            border-radius: 50%;
            border: 10px solid #f6f5f0;
            box-shadow: 0px 0px 3px 3px #e7e4dc;
            overflow: hidden;
            position: relative;
            height: 300px;
            width: 300px;
        }

        .map iframe {
            border-radius: 50%;
            height: 300px;
            width: 300px;
        }
        button {
            color: #1B63BD;
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
        <div class="carousel-inner">

            <!-- First slide -->
            <div class="carousel-item active hm-grey-strong" style="background-image: url('https://i.ytimg.com/vi/1AjNoUqe06g/maxresdefault.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <center>
                                <img src="/assets/img/Hospital.png">
                            </center>
                            <br>
                            <h1 class="h1-responsive flex-item font-bold">¡Bienvenido!</h1>
                        <li>
                            <div>
                                <p align="center" class="h3-responsive flex-item">Sabemos que una de las
                                    principales preocupaciones de una compañía debe ser el control de riesgos
                                    que atentan contra la salud de sus trabajadores y contra sus recursos
                                    materiales y financieros. por ello en nuestra prioridad informarlos.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.First slide -->

            <!-- Second slide -->
            <div class="carousel-item hm-grey-strong" style="background-image: url('https://jusamawi.files.wordpress.com/2010/09/gris.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <center>
                                <img src="/assets/img/Botiquin.png" alt="botiquin" align="middle">
                            </center>
                            <br>
                            <h1 class="h1-responsive flex-item font-bold">¿Que es la seguridad social?</h1>
                        </li>
                        <li>
                            <p class="my-4 h3-responsive flex-item" align="center" class="">
                                La seguridad social, es un servicio publico de carácter obligatorio a la ciudadanía y esta conformado por los regímenes generales establecidos por la salud, pensiones, riesgos laborales, subsidio familiar y los servicios sociales complementarios que se definen en la ley.
                            </p>
                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item hm-grey-strong" style="background-image: url('https://www.interazulejo.com/images/products/pizarra-gris-pizarra-gris.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                <center>
                    <div class="container">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                        <h3 class="h2-responsive flex-item font-bold">Nuestros servicios</h3>
                        </li>
                        <li>
                            <p class="my-4 h4-responsive flex-item" align="center" class="">
                                Aqui podra visualizar los distintos productos que ofrecemos.<br>
                            </p>
                        </li>
                    </ul>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col">
                            <div class="card">
                                    <!-- Card image -->
                                    
                                    <!-- Card content -->
                                    <div class="card-body">
                                    <!-- Title -->
                                    <!-- Card image -->
                                        <center>
                                            <img src="/assets/img/Hospital.png" width="100" height="100" 
                                            align="middle" alt="Card image cap">
                                        </center>
                                    <!-- Title -->
                                        <h4 class="card-title"><a>Servicios</a></h4>
                                        <!-- Text -->
                                        <p class="card-text">Prestadoras de salud abscritas.</p>
                                        <!-- Button -->
                                        <a href="/productos" class="btn btn-primary">Ver más</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Card -->
                                <div class="card">
                                    <!-- Card content -->
                                    <div class="card-body">
                                         <!-- Card image -->
                                        <center>
                                            <img src="/assets/img/Botiquin.png" width="100" height="100"
                                            align="middle" alt="Card image cap">
                                        </center>
                                        <!-- Title -->
                                        <h4 class="card-title"><a>Servicioas</a></h4>
                                        <!-- Text -->
                                        <p class="card-text">Aseguradoras de riesgos abscritas</p>
                                        <!-- Button -->
                                        <a href="#" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <div class="col">
                                <!-- Card -->
                                <div class="card">
                                  
                                    <!-- Card content -->
                                    <div class="card-body">
                                      <!-- Card image -->
                                        <center>
                                            <img src="/assets/img/Corazon.png" width="100" height="100" 
                                            align="middle" alt="Card image cap">
                                       </center>
                                    <!-- Title -->
                                        <h4 class="card-title"><a>Servicioas</a></h4>
                                        <!-- Text -->
                                        <p class="card-text">Caja de compensación abscritas</p>
                                        <!-- Button -->
                                        <a href="#" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <div class="col">
                                 <!-- Card -->
                                 <div class="card">
                                    <!-- Card content -->
                                    <div class="card-body">
                                        <!-- Card image -->
                                        <center>
                                            <img src="/assets/img/Cruz.png" width="100" height="100" 
                                            align="middle" alt="Card image cap">
                                        </center>
                                        <!-- Title -->
                                        <h4 class="card-title"><a>Servicioas</a></h4>
                                        <!-- Text -->
                                        <p class="card-text">Fondos privados de pensiones</p>
                                        <!-- Button -->
                                        <a href="#" class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <!-- Card -->

                            </div>
                        </div>
                    </div>
                    </div>
                </center>
                </div>
                <!-- /.Caption -->

            </div>

            <div class="carousel-item hm-grey-strong" style="background-image: url('https://www.inalco.es/archivos/productos/136/storm-gris-natural-150x300-sk-rect-1-100A.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <center>
                                <img src="/assets/img/Cruz.png">
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


    </div>










    <div class="nosotros fondo-mapa" style="background-image: url('/assets/img/GoogleMapB.jpeg'); background-repeat: no-repeat; background-size: cover; height: 80vh">
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="tagline-sucursal">Encuentranos</h2><br />
                <div class="col-lg-11 col-lg-offset-1">
                    <div class="col-lg-4">
                        <div class="map"><iframe id="mapa" scrolling="no" marginheight="0" marginwidth="0" 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.261271576248!2d-76.30124683218324!3d3.527002402787925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04e5b700c619%3A0xf54b19e78adff1c8!2sCra.+31+%2329-42%2C+Palmira%2C+Valle+del+Cauca!5e0!3m2!1ses!2sco!4v1441999181460" 
                        frameborder="0"></iframe>
                        <iframe id="mapa" scrolling="no" marginheight="0" marginwidth="0" frameborder="0"></iframe
                        ><iframe id="mapa" scrolling="no" marginheight="0" marginwidth="0" frameborder="0">
                        </iframe><iframe id="mapa" scrolling="no" marginheight="0" marginwidth="0" frameborder="0"></iframe>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="col-md-6">
            <div class="row">
                <table class="table table-bordered table-hover table-striped ">
                                            <thead style="cursor: pointer">
                                                <tr>
                                                    <th onclick="cambiar('palmira-centro')" class="active" id="palmira-centro"> Palmira - Centro</th>
                                                </tr>
                                                <tr>
                                                    <th onclick="cambiar('palmira-cc-llanogrande')" class="" id="palmira-cc-llanogrande"> Palmira - Cc. Llanogrande</th>
                                                </tr>
                                                <tr>
                                                    <th onclick="cambiar('cali')" class="" id="cali"> Cali</th>
                                                </tr>
                                                <tr>
                                                    <th onclick="cambiar('rozo')" class="" id="rozo"> Rozo</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        </div>

                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <ul class="table-bordered" id="1">
                                            <li><strong>Dirección:</strong> Carrera 31 no 29 – 42</li>
                                            <li><strong>Teléfono:</strong> 287 25 47</li>
                                            <li><strong>Email:</strong> intersaludpalmira@intersaluddelvalle.com.co</li>
                                        </ul>
                                        <ul class="table-bordered" id="2" style="display: none">
                                            <li><strong>Dirección:</strong> Locales 206 – 207</li>
                                            <li><strong>Teléfono:</strong> 2864016</li>
                                            <li><strong>Email:</strong> intersaludpalmira@intersaluddelvalle.com.co</li>
                                        </ul>
                                        <ul class="table-bordered" id="3" style="display: none">
                                            <li><strong>Dirección:</strong> Av. 2da. norte no 24N – 83</li>
                                            <li><strong>Teléfono:</strong> 3734470</li>
                                            <li><strong>Email:</strong> intersaludpalmira@intersaluddelvalle.com.co</li>
                                        </ul>
                                        <ul class="table-bordered" id="4" style="display: none">
                                            <li><strong>Dirección:</strong> Calle 10 no 9a-23</li>
                                            <li><strong>Teléfono:</strong> 317 387 2024</li>
                                            <li><strong>Email:</strong> intersaludpalmira@intersaluddelvalle.com.co</li>
                                        </ul>
                                    </div>
                                </div>

            </div>
        </div>
        </div>


    </div>




    <footer>
        <br>
        <div class="container text-center">
            <h2><strong>Intersalud Colombia</strong></h2>
            <p><strong>Sede principal:</strong> Palmira, Valle del Cauca, carrera 31 no 29 - 42 <br /><strong>Email</strong> - <a id="mail" href="mailto:intersaludpalmira@intersaluddelvalle.com.co" style="color: white">intersaludpalmira@intersaluddelvalle.com.co</a><br />
                Teléfonos: 287 25 47<br />
                2019 Intersalud Colombia SAS. - Todos los derechos reservados.
            </p>
        </div>
        <br>
    </footer>



    <script type="text/javascript">
        function cambiar(variable) {

            if (variable == 'palmira-centro') {
                document.getElementById('palmira-centro').setAttribute('class', 'active');
                document.getElementById('1').setAttribute('style', 'display: block');
                document.getElementById('mapa').setAttribute('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.261271576248!2d-76.30124683218324!3d3.527002402787925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3a04e5b700c619%3A0xf54b19e78adff1c8!2sCra.+31+%2329-42%2C+Palmira%2C+Valle+del+Cauca!5e0!3m2!1ses!2sco!4v1441999181460');
                if ('palmira-centro' != 'palmira-centro') {
                    document.getElementById('palmira-centro').setAttribute('class', '');
                    document.getElementById('1').setAttribute('style', 'display: none');
                }
                if ('palmira-centro' != 'palmira-cc-llanogrande') {
                    document.getElementById('palmira-cc-llanogrande').setAttribute('class', '');
                    document.getElementById('2').setAttribute('style', 'display: none');
                }
                if ('palmira-centro' != 'cali') {
                    document.getElementById('cali').setAttribute('class', '');
                    document.getElementById('3').setAttribute('style', 'display: none');
                }
                if ('palmira-centro' != 'rozo') {
                    document.getElementById('rozo').setAttribute('class', '');
                    document.getElementById('4').setAttribute('style', 'display: none');
                }
            }

            if (variable == 'palmira-cc-llanogrande') {
                document.getElementById('palmira-cc-llanogrande').setAttribute('class', 'active');
                document.getElementById('2').setAttribute('style', 'display: block');
                document.getElementById('mapa').setAttribute('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.2540295843914!2d-76.31625281430503!3d3.528692512229988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x697a79f2740effff!2sCentro+Comercial+Llanogrande+Plaza!5e0!3m2!1ses!2sco!4v1442000433974');
                if ('palmira-cc-llanogrande' != 'palmira-centro') {
                    document.getElementById('palmira-centro').setAttribute('class', '');
                    document.getElementById('1').setAttribute('style', 'display: none');
                }
                if ('palmira-cc-llanogrande' != 'palmira-cc-llanogrande') {
                    document.getElementById('palmira-cc-llanogrande').setAttribute('class', '');
                    document.getElementById('2').setAttribute('style', 'display: none');
                }
                if ('palmira-cc-llanogrande' != 'cali') {
                    document.getElementById('cali').setAttribute('class', '');
                    document.getElementById('3').setAttribute('style', 'display: none');
                }
                if ('palmira-cc-llanogrande' != 'rozo') {
                    document.getElementById('rozo').setAttribute('class', '');
                    document.getElementById('4').setAttribute('style', 'display: none');
                }
            }

            if (variable == 'cali') {
                document.getElementById('cali').setAttribute('class', 'active');
                document.getElementById('3').setAttribute('style', 'display: block');
                document.getElementById('mapa').setAttribute('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.6332162313021!2d-76.52354381110703!3d3.4630242308794146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x78a09208593f684e!2sPROALNET!5e0!3m2!1ses!2sco!4v1442000732197');
                if ('cali' != 'palmira-centro') {
                    document.getElementById('palmira-centro').setAttribute('class', 'active');
                    document.getElementById('1').setAttribute('style', 'display: none');
                }
                if ('cali' != 'palmira-cc-llanogrande') {
                    document.getElementById('palmira-cc-llanogrande').setAttribute('class', '');
                    document.getElementById('2').setAttribute('style', 'display: none');
                }
                if ('cali' != 'cali') {
                    document.getElementById('cali').setAttribute('class', '');
                    document.getElementById('3').setAttribute('style', 'display: none');
                }
                if ('cali' != 'rozo') {
                    document.getElementById('rozo').setAttribute('class', '');
                    document.getElementById('4').setAttribute('style', 'display: none');
                }
            }

            if (variable == 'rozo') {
                document.getElementById('rozo').setAttribute('class', 'active');
                document.getElementById('4').setAttribute('style', 'display: block');
                document.getElementById('mapa').setAttribute('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1990.9405941806835!2d-76.38688825010883!3d3.61463870195437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xdaea01cee8c038da!2sCabinas+Telef%C3%B3nicas+Rozo!5e0!3m2!1ses!2sco!4v1442000824045');
                if ('rozo' != 'palmira-centro') {
                    document.getElementById('palmira-centro').setAttribute('class', '');
                    document.getElementById('1').setAttribute('style', 'display: none');
                }
                if ('rozo' != 'palmira-cc-llanogrande') {
                    document.getElementById('palmira-cc-llanogrande').setAttribute('class', '');
                    document.getElementById('2').setAttribute('style', 'display: none');
                }
                if ('rozo' != 'cali') {
                    document.getElementById('cali').setAttribute('class', '');
                    document.getElementById('3').setAttribute('style', 'display: none');
                }
                if ('rozo' != 'rozo') {
                    document.getElementById('rozo').setAttribute('class', '');
                    document.getElementById('4').setAttribute('style', 'display: none');
                }
            }
        }
    </script>






    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/mdb.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>

</body>





</html> 
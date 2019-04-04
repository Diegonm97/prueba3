@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="estilos.css">
    <style>
        body {
            font-size: 1.5em;
        }

        .card-body {
            -webkit-box-flex: 2;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 8.25rem;
        }

        .waves-button,
        .waves-button-input,
        .waves-button:hover,
        .waves-button:visited {
            font-size: 1.5em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-md-12 text-center">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title"><b>Contáctenos</b></h1>
                    <hr>
                    <br>
                    <!--primera columna-->
                    <div class="col-md-6">
                        <!--enviar php-->
                        <?php 
                        $myemail = 'kery.chan65@gmail.com';
                        $name = $_POST['nombre'];
                        $email = $_POST['email'];
                        $tel = $_POST['telefono'];
                        $message = $_POST['mensaje'];
                        $select = $_POST['sede'];

                        $to = $myemail;
                        $email_subject = "Nuevo mensaje: $subject";
                        $email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Telefono: $tel 
                        \n Mensaje: \n $message \n 
                        Sede: \n $select";
                        $headers = "From: $email";

                        mail($to, $email_subject, $email_body, $headers);
                        echo "El mensaje se ha enviado correctamente";
                        ?>
                         <!--fin enviar php-->
                        <form method="post" action="enviar.php">
                            <input type="text" name="nombre" placeholder="Nombre" required="required">
                            <br>
                            <input type="email" name="email" placeholder="Email" required="required">
                            <br>
                            <input type="tel" name="telefono" placeholder="Telefono" required="required">
                            <br>
                            <!--SUCURSALES-->
                            <br>
                            <div>
                                <h1>Sede</h1>
                                <select name="sede" required="required">
                                    <option value="" selected="selected">Selecciona</option>
                                    <option value="1">Palmira - Centro</option>
                                    <option value="2">Palmira - Cc. Llanogrande</option>
                                    <option value="3">Cali</option>
                                    <option value="4">Rozo</option>
                                </select>
                            </div>
                            <br>
                            <!--FIN SEDES-->
                            <br><br>
                            <div class="md-form">
                                <textarea type="text" name="mensaje" row="2" class="form-control md-textarea">
                            </textarea>
                                <label for="message">
                                    <h1>Tu mensaje</h1>
                                </label>
                            </div>
                            <input type="submit" class="btn btn-info" name="button" value="Enviar">
                    </div>
                    <!--fin primera columna-->
                    <!--segunda columna-->
                    <!--direcciones-->
                    <div class="col-md-6">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h2>Palmira - Centro</h2>
                            <p font size="2">Carrera 31 no 29 – 42</p>
                            <p>Teléfono: 287 25 47</p>
                            <p style="font-size: 78%;">
                                <a id="mail" href="mailto:intersaludpalmira@intersaluddelvalle.com.co">intersaludpalmira@intersaluddelvalle.com.co</a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h3>Palmira - Cc. Llanogrande</h3>
                            <p>Locales 206 – 207</p>
                            <p>Teléfono: 2864016</p>
                            <p style="font-size: 78%;">
                                <a id="mail" href="mailto:intersaludpalmira@intersaluddelvalle.com.co">intersaludpalmira@intersaluddelvalle.com.co</a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h3>Cali</h3>
                            <p>Av. 2da. norte no 24N – 83</p>
                            <p>Teléfono: 3734470</p>
                            <p style="font-size: 78%;">
                                <a id="mail" href="mailto:intersaludpalmira@intersaluddelvalle.com.co">intersaludpalmira@intersaluddelvalle.com.co</a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <h3>Rozo</h3>
                            <p>Calle 10 no 9a-23</p>
                            <p>Teléfono: 317 387 2024</p>
                            <p style="font-size: 78%;">
                                <a id="mail" href="mailto:intersaludpalmira@intersaluddelvalle.com.co">intersaludpalmira@intersaluddelvalle.com.co</a>
                            </p>
                        </div>
                    </div>
                    <!--fin de direcciones-->
                    <!--fin segunda columna-->
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

<footer>
    <br>
    <div class="container text-center" style="color: white">
        <h2><strong>Intersalud Colombia</strong></h2>
        <p><strong>Sede principal:</strong> Palmira, Valle del Cauca, carrera 31 no 29 - 42 <br />
            <strong>Email</strong> - <a id="mail" href="mailto:intersaludpalmira@intersaluddelvalle.com.co" style="color: white">intersaludpalmira@intersaluddelvalle.com.co</a><br />
            Teléfonos: 287 25 47<br />
            2019 Intersalud Colombia SAS. - Todos los derechos reservados.
        </p>
    </div>
    <br>
</footer>

</html>
@endsection 
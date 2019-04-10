<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .izq {
            float: left;
            margin-left: 0px;
            font-size: 13px;
            width: 48%;
            clear: both;
            margin-left: 0;

        }

        .der {
            float: right;
            font-size: 13px;
            margin-right: 2%;
            width: 45%;
        }

        .info {

            position: relative;
            left: 30%;
            font-size: 15px;
            /* or right 50% */
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="cotainer">
        <article class="izq">
            <h3>Inter salud Colombia S.A.S<br>
                Nit.: 900.409.058-9</h3>
        </article>
        <article class="der">
            <div>
                <p>Oficina Palmira cra. 31 # 29-42 Tel: 2872547-2879988.</p>
                <p>Oficina Cali cra. 31 # 29-42 Tel: 2872547-2879988.</p>
                <p>Oficina Rozo calle 10 # 9A-23 Tel: 3136008896 Rozo.</p>
                <p>Oficina Llanogrande Locales 206-207 Tel: 2864016 centro comercial.</p>
                <p>Oficina Llanogrande Locale 331 Tel: 2859841 centro comercial.</p>
            </div>
        </article>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php $fecha = date("d/m/Y"); ?>
    <strong>Fecha recibo:</strong> <?php echo $fecha; ?>
    <br>
    <table class="table table-hover table-striped" style=" font-size: 15px">
        <tbody>
            <tr>
                <td><strong>Email: </strong></td>
                <td> {{$cliente->email}} </td>

                <td><strong>RECIBO:</strong></td>
                <td> {{$cliente->id}} </td>
            </tr>
            <tr>
                <td><strong>Nombre:</strong></td>
                <td> {{$cliente->nombres}} {{$cliente->apellidos}} </td>

                <td><strong>Identificación: </strong></td>
                <td> {{$cliente->identificacion}} </td>
            </tr>
            <tr>
                <td><strong>Direccion:</strong></td>
                <td> {{$cliente->direccion}} </td>

                <td><strong>Telefono: </strong></td>
                <td> {{$cliente->telefono}} </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <br><br><br>
    <div class="info">
        <div class="container">
            <div class="row">
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Administracion + IVA: </strong></td>
                            <td> $ {{number_format ($ivaadmi,0 , ' , ' , ' . ')}}</td>
                        </tr>

                        <tr>
                            <td><strong>Inscripcion + IVA: </strong></td>
                            <td> $ {{number_format ($ivainsc,0 , ' , ' , ' . ')}} </td>
                        </tr>

                        <tr>
                            <td><strong>EPS: </strong></td>
                            <td> $ {{number_format ($epst,0 , ' , ' , ' . ')}} </td>
                        </tr>

                        <tr>
                            <td><strong>ARL: </strong></td>
                            <td> $ {{number_format ($arlt,0 , ' , ' , ' . ')}} </td>
                        </tr>

                        <tr>
                            <td><strong>AFP: </strong></td>
                            <td> $ {{number_format ($afpt,0 , ' , ' , ' . ')}} </td>
                        </tr>

                        <tr>
                            <td><strong>Caja de compensación: </strong></td>
                            <td> $ {{number_format ($cjct,0 , ' , ' , ' . ')}} </td>
                        </tr>

                        <tr>
                            <td><strong>UPC: </strong></td>
                            <td> $ {{number_format ($upct,0 , ' , ' , ' . ')}} </td>
                        </tr>

                        <tr>
                            <td><strong>SERCOFUN: </strong></td>
                            <td> $ {{number_format ($serc,0 , ' , ' , ' . ')}} </td>
                        </tr>

                        <tr>
                            <td><strong>EMI: </strong></td>
                            <td> $ {{number_format ($emit,0 , ' , ' , ' . ')}} </td>
                        </tr>

                        <tr>
                            <td>
                                <h4><strong>TOTAL: </strong></h4>
                            </td>
                            <td>
                                <h4><strong>$ {{number_format ($total,0 , ' , ' , ' . ')}}</strong></h4>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <br><br><br>
    <div  align="center">

        <?php

        $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
        $meses = array(
            "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto",
            "Septiembre", "Octubre", "Noviembre", "Diciembre"
        );

        echo $dias[date('w')] . " " . date('d') . " de " . $meses[date('n') - 1] . " del " . date('Y');
        //Salida: Viernes 24 de Febrero del 2012

        ?>
        <div>
            <p>Según Decreto No 1804/1999 los pagos deben realizarse</P>
            <p>los 3 primeros días de cada mes para pago de Incapacidades.
            </p>
        </div>
    </div>
  
</body>

</html>
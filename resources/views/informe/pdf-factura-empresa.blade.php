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
            width: 50%;
            clear: both;
            margin-left: 0;

        }

        .der {
            float: right;
            font-size: 13px;
            margin-right: 2%;
            width: 50%;
        }

        .info {

            position: relative;
            /* left: 10%;
            font-size: 15px;
            /* or right 50% */
            text-align: left;
        }

        .table1 {
            border-collapse: collapse;

        }

        .table1,
        th,
        td {
            border: 1px solid black;
        }

        .table2 {
            left: 10%;

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
    <?php $fecha = date("d/m/Y"); ?>
    <strong>Fecha recibo:</strong> <?php echo $fecha; ?>
    <br>
    <table class="table table-hover table-striped" style=" font-size: 12px">
        <tbody>
            <tr>
                <td><strong>EMPRESA: </strong></td>
                <td> {{$empresa->nombre}} </td>

                <td><strong>RECIBO:</strong></td>
                <td> </td>
            </tr>
            <tr>
                <td><strong>Nombre contacto:</strong></td>
                <td> {{$empresa->nombre_contacto}} </td>

                <td><strong>Identificación: </strong></td>
                <td> {{$empresa->nit}} </td>
            </tr>
            <tr>
                <td><strong>Direccion:</strong></td>
                <td> {{$empresa->direccion}} </td>

                <td><strong>Telefono: </strong></td>
                <td>{{$empresa->telefono_contacto}} </td>
            </tr>
        </tbody>
    </table>
    <hr>
    <br>
    <div class="info">
        <div class="container">
            <div class="row">
                <table class="table1" style=" font-size: 12px">
                    <thead>
                        <tr>
                            <th>Identificación</th>
                            <th>Nombres</th>
                            <th>Salario</th>
                            <th>EPS</th>
                            <th>Valor EPS</th>
                            <th>AFP</th>
                            <th>valor AFP</th>
                            <th>ARL</th>
                            <th>Valor ARL</th>
                            <th>C.C.F</th>
                            <th>Valor C.C.F</th>
                            <th>Fecha ing.</th>
                            <th>Pago</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->identificacion}}</td>
                            <td>{{$empleado->nombres}} {{$empleado->apellidos}}</td>
                            <td>$ {{number_format($empleado->salario,0,',','.')}}</td>

                            @foreach ($epss as $eps)
                            @if ($eps->id == $empleado->id_eps)
                            <td>{{$eps->nombre}}</td>
                            @endif
                            @endforeach

                            <td>$ {{number_format($empleado->salario * 0.04,0,',','.')}}</td>

                            @foreach ($afps as $afp)
                            @if ($afp->id == $empleado->id_afp)
                            <td>{{$afp->nombre}}</td>
                            @endif
                            @endforeach


                            <td>$ {{number_format($empleado->salario * 0.16,0,',','.')}}</td>



                            @foreach ($arls as $arl)
                            @if ($arl->id == $empleado->id_arl)
                            <td>{{$arl->nombre}}</td>
                            @endif
                            @endforeach




                            @if ($empleado->rango == 1)
                            <td>$ {{number_format($empleado->salario * 0.00522,0,',','.')}}</td>
                            @endif
                            @if ($empleado->rango == 2)
                            <td>$ {{number_format($empleado->salario * 0.01044,0,',','.')}}</td>
                            @endif
                            @if ($empleado->rango == 3)
                            <td>$ {{number_format($empleado->salario * 0.02436,0,',','.')}}</td>
                            @endif
                            @if ($empleado->rango == 4)
                            <td>$ {{number_format($empleado->salario * 0.0435,0,',','.')}}</td>
                            @endif
                            @if ($empleado->rango == 5)
                            <td>$ {{number_format($empleado->salario * 0.0696,0,',','.')}}</td>
                            @endif

                            @foreach ($cajacomps as $cjc)

                            @if ($cjc->id == $empleado->id_cjc)
                            <td>{{$cjc->nombre}}</td>
                            @endif
                            @endforeach

                            <td>$ {{number_format($empleado->salario * 0.04,0,',','.')}}</td>

                            <td> {{$empleado->fecha_ingreso}} </td>
                            <td>$ {{number_format($empleado->pago,0,',','.')}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="der">
                    <table class="table2" style=" font-size: 12px">
                        <tbody>
                            <tr>
                                <td colspan="2"></td>
                                <td><strong>Inscripción + IVA </strong></td>
                                <td>${{ number_format($ivaadmi,0,',','.')}}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td><strong>Administración + IVA</strong></td>
                                <td>${{ number_format($ivainsc,0,',','.')}}</td>
                            </tr>
                            <tr>
                                <td colspan="2"></td>
                                <td>
                                    <h4 style="font-weight: bold;">Total a pagar</h4>
                                </td>
                                <td>
                                    <h4>${{ number_format($total,0,',','.')}}</h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <br><br><br>
    <br><br><br>

    <div align="center">

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
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>

<head>
    <style>
        footer {
            background: #1B63BD;
            color: white;
            border-top: #1B63BD;
        }

        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .pill-nav a {
            display: block;
            color: black;
            padding: 14px;
            text-decoration: none;
            font-size: 17px;
            border-radius: 5px;
        }

        .pill-nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .pill-nav a.active {
            background-color: dodgerblue;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="min-height:300px;">
            <div class="col-sm-12">
                <h3>Nosotros</h3>
                <hr />
                <br>
                <div class="col-xs-3">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                        <li class="active "><a href="#Planes" data-toggle="tab">Planes y servicios</a>
                        <li><a href="#riesgos" data-toggle="tab">Tabla de riesgos laborales</a></li>
                        <li><a href="#Beneficios" data-toggle="tab">Beneficios</a></li>
                        <li><a href="#adicionales" data-toggle="tab">Servicios adicionales</a></li>
                        <li><a href="#Contrato" data-toggle="tab">Contrato de prestaciones de servicios</a></li>
                        <li><a href="#aportes" data-toggle="tab">Tus aportes</a></li>
                        <li><a href="#exterior" data-toggle="tab">Colombianos en el exterior</a></li>
                    </ul>
                </div>
                <div class="col-xs-9" style="border: 1px solid #ddd; border-radius: 4px">
                    <br>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="Planes">
                            <h4 class="display-4">Seguridad social</h4>
                            <hr class="my-4">
                            <p>De acuerdo al régimen de previsión y seguridad social de "Intersalud del Valle SAS.",
                                cubre los siguientes conceptos:</P>

                            <h4 class="display-4 text-center">Planes y servicios</h4>
                            <br>
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>
                                                <h3>Concepto</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>Porcentaje</h3>
                                            </strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3>Salud (EPS)</h3>
                                        </td>
                                        <td>
                                            <h3>12.5%</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>Pensión (AFP)</h3>
                                        </td>
                                        <td>
                                            <h3>16%</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>Parafiscales (caja de compensación)</h3>
                                        </td>
                                        <td>
                                            <h3>4%</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>Riesgos laborales
                                                A.R.L rangos 1 - 2 - 3 - 4 - 5</h3>
                                        </td>
                                        <td>
                                            <h3>Varía de acuerdo a la actividad desempeñada (decreto 1607)</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <p style="text-align: center; font-style: italic">
                                Los valores aquí cotizados son con base en un SMLV del año en curso.</P>
                            <h4 class="display-4 text-center">Plan básico</h4>
                            <br>
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>
                                                <h3>Rangos</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>EPS</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>ARL</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>AFP</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>CajaComp/Fliar</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>Admon</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>TOTAL</h3>
                                            </strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3>1 = 0.522%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 4.323</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 139.486</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>2 = 1.044%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 8.650</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 143.813</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>3 = 2.436%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 20.182</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 155.345</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>4 = 4.350%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 36.040</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 171.203</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>5 = 6.960%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 57.664</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 192.827</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 class="display-4 text-center">Plan complementario</h4>
                            <br>
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>
                                                <h3>Rangos</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>EPS</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>ARL</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>AFP</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>CajaComp/Fliar</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>Admon</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>TOTAL</h3>
                                            </strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3>1 = 0.522%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 4.323</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 271.986</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>2 = 1.044%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 8.650</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 276.313</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>3 = 2.436%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 20.182</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 287.845</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>4 = 4.350%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 36.040</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 303.703</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>5 = 6.960%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 57.664</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 0</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 325.327</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 class="display-4 text-center">Plan familiar recreación y subsidio</h4>
                            <br>
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>
                                                <h3>Rangos</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>EPS</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>ARL</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>AFP</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>CajaComp/Fliar</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>Admon</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>TOTAL</h3>
                                            </strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3>1 = 0.522%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 4.323</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 74.530</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 346.516</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>2 = 1.044%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 8.650</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 74.530</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 350.843</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>3 = 2.436%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 20.182</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 74.530</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 362.375</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>4 = 4.350%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 36.040</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 74.530</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 378.233</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>5 = 6.960%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 103.563</h3>
                                        </td>
                                        <td>
                                            <h3>$ 57.664</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 74.530</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 399.857</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <h4 class="display-4 text-center">Plan integral empresas con beneficio de
                                ley 1607 de 2012 Art 31 paragrafo 4 de la reforma tributaria</h4>
                            <br>
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th scope="col"><strong>
                                                <h3>Rangos</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>EPS</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>ARL</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>AFP</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>CajaComp/Fliar</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>Admon</h3>
                                            </strong></th>
                                        <th scope="col"><strong>
                                                <h3>TOTAL</h3>
                                            </strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h3>1 = 0.522%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 4.323</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 234.703</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>2 = 1.044%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 8.650</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 239.03</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>3 = 2.436%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 20.182</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 250.562</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>4 = 4.350%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 36.040</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 266.420</h3>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h3>5 = 6.960%</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 57.664</h3>
                                        </td>
                                        <td>
                                            <h3>$ 132.500</h3>
                                        </td>
                                        <td>
                                            <h3>$ 33.140</h3>
                                        </td>
                                        <td>
                                            <h3>$ 31.600</h3>
                                        </td>
                                        <td>
                                            <h3>$ 288.044</h3>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div class="container">
                                <p><strong>Por disposición gubernamental toda persona que cotice al régimen contributivo en salud
                                        debe cotizar a pensiones obligatorias.</strong></p>
                                <p><em>NOTA:</em> La administración de <em>($26.300)</em> es por el manejo de los pagos de Seguridad Social mediante el
                                    operador de aportes en línea, trámite de incapacidades por enfermedad general, incapacidades por accidentes
                                    labores, generar reportes de accidentes ante la ARL y radicación de los documentos a las EPS, recaudo del
                                    dinero desde su lugar de trabajo hacia la entidad bancaria, exoneración del 4xmil, presentación mensual del
                                    COPASO a la ARL por los funcionarios adscritos, cuota de manejo por portal empresarial y papelería,
                                    elaboración de derechos de petición y/o tutelas si es el caso; asesoría jurídica por nuestro consultor
                                    externo cuando se requiera para pensión.</p>
                                <p>Los parafiscales ( Sena, ICBF, Caja de compensación ) que equivalen al 4% del ingreso base. El valor de cada trabajador.
                                    ( $29.508). Sobre el SMLV.</p>
                                <p>Costo de inscripción por afiliado es de $95.000</p>
                                <p>Con el cual empieza a disfrutar del servicio médico de URGENCIAS por un período de 30 días y cubrimiento
                                    por la ARL colpatria a las 24 Horas de inscrito en nuestras oficinas.</p>
                            </div>
                            <br>
                        </div>
                        <div class="tab-pane" id="riesgos">
                            <h3 class="display-4">Tabla de riesgos laborales</h3>
                            <hr class="my-4">
                            <!--tabla de riesgos laborales-->
                            <div class="container">
                                <br>
                                <table class="table table-bordered table-striped table-condensed table-reponsive">
                                    <thead>
                                        <tr>
                                            <th scope="col"><strong>
                                                    <h3>Riesgo</h3>
                                                </strong></th>
                                            <th scope="col"><strong>
                                                    <h3>% Inicial</h3>
                                                </strong></th>
                                            <th scope="col"><strong>
                                                    <h3>Valor SMMLV</h3>
                                                </strong></th>
                                            <th scope="col"><strong>
                                                    <h3>Clasificación riesgo varia de acuerdo a la actividad (decreto 1607)</h3>
                                                </strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h3>1</h3>
                                            </td>
                                            <td>
                                                <h3>0.522%</h3>
                                            </td>
                                            <td>
                                                <h3>$ 4.323</h3>
                                            </td>
                                            <td>
                                                <h3>
                                                    <ul>
                                                        <li>Secretarias</li>
                                                        <li>Aux. oficina</li>
                                                        <li>Ventas - Mostrador</li>
                                                        <li>Docentes</li>
                                                        <li>Contaduría</li>
                                                    </ul>
                                                    <h3>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>2</h3>
                                            </td>
                                            <td>
                                                <h3>1.044%</h3>
                                            </td>
                                            <td>
                                                <h3>$ 8.650</h3>
                                            </td>
                                            <td>
                                                <h3>
                                                    <ul>
                                                        <li type="circle">Mesero</li>
                                                        <li type="circle">Panaderia</li>
                                                        <li type="circle">Aseadores</li>
                                                        <li type="circle">Cocina</li>
                                                        <li type="circle">Labores de campo</li>
                                                    </ul>
                                                </h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>3</h3>
                                            </td>
                                            <td>
                                                <h3>2.436%</h3>
                                            </td>
                                            <td>
                                                <h3>$ 20.182</h3>
                                            </td>
                                            <td>
                                                <h3>
                                                    <ul>
                                                        <li type="circle">Ebanistas</li>
                                                        <li type="circle">Médicos</li>
                                                        <li type="circle">Enfermeras</li>
                                                        <li type="circle">Acabados</li>
                                                        <li type="circle">Estibadores</li>
                                                        <li type="circle">Carga coteros</li>
                                                        </u>
                                                </h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>4</h3>
                                            </td>
                                            <td>
                                                <h3>4.35%</h3>
                                            </td>
                                            <td>
                                                <h3>$ 36.040</h3>
                                            </td>
                                            <td>
                                                <h3>
                                                    <ul>
                                                        <li type="circle">Soldadores</li>
                                                        <li type="circle">Conductores</li>
                                                        <li type="circle">Mensajeros</li>
                                                        <li type="circle">Eléctricos</li>
                                                        <li type="circle">Mecánicos</li>
                                                    </ul>
                                                </h3>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h3>5</h3>
                                            </td>
                                            <td>
                                                <h3>6.96%</h3>
                                            </td>
                                            <td>
                                                <h3>$ 57.664</h3>
                                            </td>
                                            <td>
                                                <h3>
                                                    <ul>
                                                        <li type="circle">Mecánicos</li>
                                                        <li type="circle">Constructores</li>
                                                        <li type="circle">Vigilantes</li>
                                                        <li type="circle">Escoltas</li>
                                                        <li type="circle">Conductores mulas</li>
                                                    </ul>
                                                </h3>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <!--Fin de la tabla de riesgos laborales-->
                        </div>



                        <div class="tab-pane" id="Beneficios">
                            <h3 class="display-4">Beneficios</h3>
                            <hr class="my-4">
                            <ul>
                                <li type="circle">Servicio de corresponsal bancario <b>BANCO DE BOGOTA</b> "Todas las transacciones" en nuestras instalaciones.</li>
                                <li type="circle">Minimización de costos en la elaboración de cheques.</li>
                                <li type="circle">Sin filas bancarias.</li>
                                <li type="circle">Ahorro del 4 por Mil.</li>
                                <li type="circle">Prevención al posible fleteo.</li>
                                <li type="circle">Servicio a domicilio.</li>
                                <li type="circle">Disminución de carga operativa de su personal de trabajo.</li>
                                <li type="circle">INTERSALUD realiza el trámite administrativo ante EPS, ARL, AFP y caja de
                                    compensación (afiliaciones, aportes, incapacidades radicaciones).</li>
                                <li type="circle">Usted puede contar con el acompañamiento del profesional en salud ocupacional por
                                    parte de la ARL Colpatria o Positiva ARL según el contrato.</li>
                                <li type="circle">Elaboración de novedades por traslados de IPS o EPS.</li>
                                <li type="circle">Agilidad en los procesos de afiliación y desafiliación - Carnetización ARL.</li>
                                <li type="circle">Acompañamiento continúo a su empresa por nuestra parte.</li>
                                <li type="circle">Convenios comerciales con almacenes de cadena, servicio de odontología y estético.</li>
                                <li type="circle">Cotización a servicio funerario Los Olivos (Sercofun).</li>
                                <li type="circle">Convenio EMI.</li>
                            </ul><br>
                            <p>Los exámenes de laboratorio para ingreso a laborar de los empleados:</p>
                            <br>
                            <ul>
                                <li type="circle">Trigliceridos</li>
                                <li type="circle">Glicemia</li>
                                <li type="circle">Colesterol</li>
                                <li type="circle">Serologia</li>
                                <li type="circle">Hemoclasificacion</li>
                                <li type="circle">Grupo Sanguíneo</li>
                                <li type="circle" style="strong">( Todos por un solo costo de $15.000 )</li>
                            </ul><br>
                            <p>Examen médico general para ingreso a laborar o terminación de contrato por persona a un costo de $21.900</p>
                            <br>
                        </div>

                        <div class="tab-pane" id="adicionales">
                            <h3 class="display-4">Servicios adicionales</h3>
                            <hr class="my-4">

                            <br />
                            <p>Por ser asociado a nuestra empresa <strong>"Intersalud del Valle SAS."</strong> usted contará con el beneficio de servicios adicionales a nuestra organización los cuales podrán tener hasta un 20% de descuento en el momento de usted usarlos, dichos servicios son:</p><br />
                            <p><i class="fa fa-check"></i> 20% de descuento en servicio de odontología en Mundonet servicios odontológicos, odontología Proteger descuentos con especialistas y facilidades de pago.</p>
                            <p><i class="fa fa-check"></i> Descuentos en mamografías, radiografías, escanografías (TAC), densitometría, en el SVP San Vicente de Paúl S.A.S.</p>
                            <p><i class="fa fa-check"></i> 40% de descuento en servicio de laboratorio clínico en el Edificio Liliana.</p>
                            <p><i class="fa fa-check"></i> 15% de descuento en servicio de optometría en Óptica el Lago.</p>
                            <p><i class="fa fa-check"></i> Hasta 50% de descuento en servicios estéticos Medical House SPA Dr. Diego Fernando Betancourt.</p>
                            <p><i class="fa fa-check"></i> 20% de descuento en servicios estéticos unidad de medicina estética y antienvejecimiento Dr. Cesar Andrés Betancourt.</p>
                            <p><i class="fa fa-check"></i> 10% de descuento en compras en almacenes variedades Betty, Studio F y Tez canela.</p>
                            <p><i class="fa fa-check"></i><strong>Servicio funerario Sercofun - Los Olivos:</strong> grupo básico por un costo de $<strong>17.400.oo</strong> plan unión siempre 2.</p>
                            <p><i class="fa fa-check"></i><strong>Afiliado principal casado:</strong> Titular: edad máxima de ingreso hasta los 65 años, conyugue sin límite de edad, hijos todos.</p>
                            <p><i class="fa fa-check"></i><strong>Afiliado principal soltero:</strong> Titular: edad máxima de ingreso hasta los 65 años, padres del afiliado sin limite de edad y hermanos solteros sin hijos hasta los 35 años de edad; todo afiliado adicional sin grupo tiene un <strong>costo de $4.000</strong></p>
                            <p></p><br>
                            <h2 class="text-center"><b>Salud ocupacional</b></h2><br /><br />
                            <p><i class="fa fa-check"></i>Asesoria en el sistema de gestión de la seguridad y salud en el trabajo.</p>
                            <p><i class="fa fa-check"></i>Capacitaciones.</p>
                            <p><i class="fa fa-check"></i>Examenes médicos ocupacionales (Ingresos, Periodicos y de Egresos).</p>
                            <p><i class="fa fa-check"></i>Planes de Emergencia.</p>
                            <p><i class="fa fa-check"></i>Manejo de Extintores.</p>
                            <p><i class="fa fa-check"></i>Señalizacion y Control visual.</p>
                            <p><i class="fa fa-check"></i>Inspeccion de equipos de altura por personal competente.</p>
                            <p><i class="fa fa-check"></i>Investigaciion de Accidente Laboral (AL) y Enfermedad Laboral (EL).</p>
                            <p><i class="fa fa-check"></i>Asesoria al plan estratégico de seguridad.</p>
                            <p><i class="fa fa-check"></i>Asesoria en RUC (Reubicacion en el trabajo).</p><br /><br />

                        </div>
                        <div class="tab-pane" id="Contrato">
                            <h3 class="display-4">Contrato de prestaciones de servicios</h3>
                            <hr class="my-4">
                            </h2><br />
                            <p>Es la legalización del contrato de prestación de servicios entre "Intersalud del Valle SAS." y la empresa.</p><br />
                            <p>Una vez se formalice el contrato de prestación de servicios, los nuevos asociados a
                                nuestra empresa, deberán cumplir con los siguientes requisitos, de acuerdo a los
                                estatutos de la misma:</p>
                            <br />
                            <b>Cotizante:</b>
                            <ul>
                                <li>Diligenciamiento del formulario de vinculación a "Intersalud del Valle SAS.", anexando la siguiente documentación básica:
                                </li>
                                <li>Fotocopia de la cédula ampliada al 150% del asociado.</li>
                                <li>Indicarnos las entidades a las que esta inscrito (EPS y Pensión).</li>
                            </ul><br />
                            <b>Beneficiarios padres:</b>
                            <ul>
                                <li>Fotocopia de los documentos de identificación y parentesco de sus beneficiarios.</li>
                                <li>Registro civil de nacimiento del cotizante.</li>
                                <li>Formato de dependencia económica.</li>
                            </ul><br />
                            <b>Beneficiarios conyuge o compañero(a) permanente:</b>
                            <ul>
                                <li>Fotocopia de cédula del conyuge.</li>
                                <li>Registro civil de matrimonio o formato de convivencia (union libre).</li>
                            </ul><br />
                            <b>Beneficiarios, hijos de 7 a 18 años:</b>
                            <ul>
                                <li>Copia del registro civil de nacimiento.</li>
                                <li>Copia de la tarjeta de identidad.</li>
                            </ul><br />
                            <b>Beneficiarios hijos mayores de 18 años hasta 25 años:</b>
                            <ul>
                                <li>Copia del registro civil de nacimiento.</li>
                                <li>Formato de exclusividad hijos mayores de 18 años decreto 1164 de Julio 2014.</li>
                                <li>Copia de la cédula.</li>
                            </ul>
                            <br />
                            <p><strong>Para su información contamos con las siguientes cuentas bancarias:</strong></p>
                            <br />
                            <p style="font-style: italic">Señor usuario, usted puede realizar su aporte consginando en las siguientes cuentas:</p>
                            <div class="row">
                                <div class="col-lg-10 col-lg-offset-1 table-responsive">
                                    <table class="table table-bordered table-condensed table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Bancos</th>
                                                <th scope="col">Cuenta</th>
                                                <th scope="col">No-Cuenta</th>
                                                <th scope="col">Titular Cuenta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Bogota</td>
                                                <td>Corriente</td>
                                                <td>821004447</td>
                                                <td>Intersalud del Valle</td>
                                            </tr>
                                            <tr>
                                                <td>Davivienda</td>
                                                <td>Ahorros</td>
                                                <td>012300000473</td>
                                                <td>Alexander Ramos</td>
                                            </tr>
                                            <tr>
                                                <td>Colpatria</td>
                                                <td>Corriente</td>
                                                <td>5971007453</td>
                                                <td>Intersalud del Valle</td>
                                            </tr>
                                            <tr>
                                                <td>Colpatria</td>
                                                <td>Ahorros</td>
                                                <td>5972123775</td>
                                                <td>Intersalud del Valle</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p>&nbsp;</p>
                                </div>
                            </div>
                            <p>
                                <strong>NOTA: La consignación debe ser enviada al correo eléctrico informando numero de
                                    cédula del cotizante.</strong>
                            </p>
                        </div>
                        <div class="tab-pane" id="aportes">
                            <h3 class="display-4">Tus aportes</h3>
                            <hr class="my-4">
                            <br>
                            <a target="blank" href="http://www.aportesenlinea.com">
                                <center>
                                    <img src="/assets/img/aportes.jpg">
                                </center>
                            </a>
                            <br>
                            <p style="font-style: italic" align="center">Si no puede visualizar las planillas directamente, guarde los archivos en su 
                            ordenador y realice la apertura directamente con su aplicación 
                            <a target="blank" href="http://www.adobe.com/es/downloads">Adobe</a>.
                            
                            </p>
                        </div>
                        <div class="tab-pane" id="exterior">
                            <h3 class="display-4">Afiliación a pensión para colombianos residentes en el exterior</h3>
                            <hr class="my-4">
                            <br>
                            <a target="blank" href="http://www.mintrabajo.gov.co/web/guest/empleo-y-pensiones/pensiones/cotizacion-a-pension-para-colombianos-en-el-exterior">
                                <center>
                                    <img src="/assets/img/GloboTerraqueo.png">
                                </center>
                            </a>
                            <br>
                            <p style="font-style: italic" align="center">Residente en el exterior, consúltenos para brindarle la protección 
                            social en pensiones como colombiano residente en el exterior.
                                <a target="blank" href="https://www.minsalud.gov.co/sites/rid/Lists/BibliotecaDigital/RIDE/DE/DIJ/Resolucion-2634-de-2014.pdf">
                                <i class="fa fa-file-pdf-o fa-2x"></i> Ver resolución
                                </a>
                            <br/>
                            </p>
                        </div>
                        <div class="tab-pane" id="settings">Settings Tab.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
</body>

</html>

@endsection 
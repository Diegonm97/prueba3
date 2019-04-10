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
    </style>
</head>

<body>
    <div class="container">
        <div class="row" style="min-height:300px;">
            <div class="col-sm-12">
                <br>
                <hr /><br>

                <div class="col-xs-4">
                    <!-- required for floating -->
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#seguridad" data-toggle="tab">¿Que es la seguridad social?</a></li>
                        <li><a href="#Trabajadores" data-toggle="tab">Beneficios - Trabajadores</a></li>
                        <li><a href="#Empleadores" data-toggle="tab">Beneficios - Empleadores</a></li>
                        <li><a href="#dependientes" data-toggle="tab">Trabajadores dependientes</a></li>
                        <li><a href="#independientes" data-toggle="tab">Trabajadores independientes</a></li>
                        <li><a href="#pleno" data-toggle="tab">Trabajo pleno</a></li>
                    </ul>
                </div>
                <div class="col-xs-8" style="border: 1px solid #ddd; border-radius: 4px">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="seguridad">
                            <h3 class="display-4">¿Que es la seguridad social?</h3>
                            <hr class="my-4">

                            <p>La seguridad social, es un servicio publico de carácter obligatorio a la ciudadanía y esta conformado
                                por los regímenes generales establecidos por la salud, pensiones, riesgos laborales, subsidio familiar y
                                los servicios sociales complementarios que se definen en la ley.</p>
                            <p>El principal beneficio que tiene un trabajador en un empleo formal es su vinculación al sistema de seguridad
                                social integral, sistema que busca protegerlo de las eventualidades que se pueden presentar y que requieren
                                una espacial atención en aras de garantizar su bienestar general y también el de su familia.</p>
                            <p>Entre estas eventualidades se encuentra la de alteración a la salud, incapacidad laboral, muerte, desempleo
                                y vejez, y para cuya protección se establecieron los sistemas de salud, riesgos laborales, pensiones y de
                                subsidio familiar.
                            </p>
                            <br>
                        </div>
                        <div class="tab-pane" id="Trabajadores">
                            <h3 class="display-4">Beneficios - Trabajadores</h3>
                            <hr class="my-4">

                            <p>
                                <ul class="list-group list-group-flush">
                                    <hr class="my-4">
                                    <li type="circle">Garantía de protección de los derechos fundamentales.</li>
                                    <li type="circle">Prestaciones asistenciales y económicas, para el trabajador y su familia.</li>
                                    <li type="circle"> Generación de ingresos que mejoran la economía doméstica.</li>
                                    <li type="circle">Recreación y cultura, para el trabajador y la familia.</li>
                                    <li type="circle">Seguridad y salud en el trabajo.</li>
                                </ul>
                            </p>
                            <br>
                        </div>
                        <div class="tab-pane" id="Empleadores">
                            <h3 class="display-4">Beneficios - Empleadores</h3>
                            <hr class="my-4">

                            <p>
                                <ul class="list-group list-group-flush">
                                    <hr class="my-4">
                                    <li type="circle">Permitir que los trabajadores y sus familias se beneficien del sistema de seguridad social integral.</li>
                                    <li type="circle">Crear y mantener un ambiente laboral seguro para los trabajadores contratistas.</li>
                                    <li type="circle">Cobertura de los riesgos por parte del sistema.</li>
                                    <li type="circle">Cumplimiento de las normas.</li>
                                    <li type="circle">Aumento de la productividad del negocio.</li>
                            </p>
                            <br>
                        </div>
                        <div class="tab-pane" id="dependientes">
                            <h3 class="display-4">Trabajadores dependientes</h3>
                            <hr class="my-4">
                            <br>
                            <p>Persona que tiene derecho a que se le pague periódicamente el salario pactado, coticen por esta persona
                                en el Sistema de Seguridad Social Integral, al pago de las prestaciones sociales y una vez se termine la relación
                                laboral le cancelan su liquidación correspondiente.</p>
                            <p>
                                <h2>Para la afiliación ... tener en cuenta</h2>
                            </p>
                            Seleccionar la entidad promotora de salud (EPS) y la administradora de fondos de pensiones (AFP) e informar
                            al empleador para iniciar el proceso de afiliación.</p>
                            <p>Suscribir los formularios y aportar los documentos requeridos para su afiliación a la entidad promotora de salud
                                (EPS) y a la administradora de fondos de pensiones (AFP).</p>
                            <p>Identificar los beneficios para ser postulados, tanto a la EPS como a la caja de compensación familiar (CCF), y
                                entregar los documentos requeridos.</p>
                            <p>La afiliación a la administradora de riesgos laborales (ARL) la realiza el empleador y depende del riesgo en el
                                que esté clasificada su actividad.</p>
                            </p>
                            <br>
                        </div>
                        <div class="tab-pane" id="independientes">
                            <h3 class="display-4">Trabajadores independientes</h3>
                            <hr class="my-4">
                            <br>
                            <p>El trabajador independiente es aquel que se encuentra vinculado mediante un contrato de prestación de servicios,
                                es decir, quien trabaja bajo la figura de contratista. Bajo esta forma también se afilia el trabajador por cuenta propia.</p>
                            <h3>Para la afiliación ... tener en cuenta</h3>
                            <p>Seleccionar la entidad promotora de salud (EPS) y la administradora de fondos de pensiones (AFP) para iniciar el
                                proceso de afiliación.</p>
                            <p>Suscribir los formularios y aportar los documentos requeridos para su afiliación a la entidad promotora de salud (EPS)
                                y a la administradora de fondos de pensiones (AFP).</p>
                            <p>La afiliación a la administradora de riesgos laborales (ARL) la realiza a través del contratante. El trabajador tiene la
                                responsabilidad de pago cuando el nivel de riesgo es I, II o III, y cuando el riesgo es IV o V el pago lo hace el contratante.</p>
                            <p>Para la afiliación a caja de compensación familiar (CCF) debe establecer contrato directo con la caja seleccionada,
                                y es de carácter voluntario.</p>
                            <p>Identificar los beneficios para ser postulados, tanto a la EPS como a la CCF, y debe aportar los documentos requeridos.
                            </p>
                            <br>
                        </div>
                        <div class="tab-pane" id="pleno">
                            <h3 class="display-4">Trabajo pleno</h3>
                            <hr class="my-4">
                            <br>
                            <p>El nuevo ministerio de trabajo tiene la misión de estimular el empleo formal, digno, productivo y de calidad, que proteja
                                lo derechos de los trabajadores, al tiempo que garantice el suministro de talento humano capacitado para atender las necesidades
                                de competitividad y productividad de las empresas de hoy.</p>

                            Son cinco los ejes rectores de la agenda del ministerio:
                            <ul class="list-group list-group-flush">
                                <hr class="my-4">
                                1. Trabajo digno y de calidad para todos.
                                <hr class="my-4">

                                <li type="circle">Mas y mejor empleo.</li>
                                <li type="circle">Pacto social por el trabajo.</li>
                                <li type="circle">El trabajo como eje del desarrollo humano.</li>
                            </ul>

                            <ul class="list-group list-group-flush">
                                <hr class="my-4">
                                2. Ni un trabajador sin protección social.
                                <hr class="my-4">

                                <li type="circle">Protección al trabajador desocupado y en su vejez.</li>
                                <li type="circle">Protección al trabajador sin patrón o independiente.</li>
                                <li type="circle">Protección y dignidad al trabajador informal.</li>
                            </ul>

                            <ul class="list-group list-group-flush">
                                <hr class="my-4">
                                3. Puentes para el encuentro de empresas y trabajadores.
                                <hr class="my-4">

                                <li type="circle">Pasar de la confrontación a una relación de construcción de acuerdos.</li>
                                <li type="circle"> El trabajador habla a través de su organización.</li>
                                <li type="circle">Protección a los derechos fundamentales del trabajo.</li>
                            </ul>

                            <ul class="list-group list-group-flush">
                                <hr class="my-4">
                                4. De la calidad del trabajador depende la calidad de la empresa.
                                <hr class="my-4">

                                <li type="circle">La formación y capacitación hacen trabajadores más productivos y mejor remunerados.</li>
                                <li type="circle">Siempre hay una manera de realizar mejor el trabajo.</li>
                                <li type="circle">Mejoramiento de competencias para la movilidad laboral.</li>
                            </ul>
                            <ul class="list-group list-group-flush">
                                <hr class="my-4">
                                5. El trabajador en los nuevos tiempos.
                                <hr class="my-4">
                                <li type="circle">Reglas de juegos para todas la formas de trabajo.</li>
                                <li type="circle">Respuestas dinámicas y adecuadas a los nuevos retos laborales.</li>
                                <li type="circle">Equidad de genero.</li>
                                <li type="circle">Nuevas modalidades de trabajo en la era digital.</li>
                            </ul>
                            </p>
                            <br>
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
<html>
@endsection
@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row" style="min-height:300px;height:1100px;">
        <div class="col-sm-12">
            <br>
            <div class="col-xs-2">
                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active"><a href="#Misión" data-toggle="tab">Misión</a></li>
                    <br>
                    <li><a href="#Visión" data-toggle="tab">Visión</a></li>
                    <li><a href="#Unidos" data-toggle="tab">Unidos por el desarrollo y el bienestar social en salud</a></li>
                    <li><a href="#Condiciones" data-toggle="tab">Condiciones generales</a></li>
                </ul>
            </div>
            <div class="col-xs-9" style="border: 1px solid #ddd; border-radius: 4px">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="Misión">
                        <h3 class="display-4">Misión</h3>
                        <hr class="my-4">

                        <p>Mejorar la calidad de vida en salud de nuestros asociados y la comunidad en general
                            afiliándolos al sistema de seguridad social, sin ningún tipo de distinción, credo, raza,
                            religión, posición económica. para así posicionarnos y consolidarnos como una empresa
                            líder en la intermediación de afiliaciones al sistema de seguridad social en salud del
                            régimen contributivo, mediante la presentación de un servicio integral propio de nuestra
                            firma y en alianza con las diferentes eps del sector, garantizando nuestra sostenibilidad
                            y servicio social.
                        </p>
                    </div>
                    <div class="tab-pane" id="Visión">
                        <h3 class="display-4">Visión</h3>
                        <hr class="my-4">
                        <p>Ser una empresa líder en los servicios que ofrecemos, logrando ser aliados de los empresarios,
                            trabajadores y la comunidad en general cumpliendo con todas las expectativas de nuestros clientes.
                            el éxito de nuestro servicio radica en la responsabilidad y transparencia en el manejo de los recursos
                            de nuestros asociados, colocando a su disposición para el 2015 mas de seis oficinas en el departamento
                            del valle aumentando nuestros asociados a 3000.
                        </p>
                    </div>
                    <div class="tab-pane" id="Unidos">
                        <h3 class="display-4">Unidos por el desarrollo y el bienestar social en salud</h3>
                        <hr class="my-4">
                        <p>Una de las principales preocupaciones de una compañía debe ser el control de riesgos que atentan contra
                            la salud de sus trabajadores y contra sus recursos materiales y financieros. Los accidentes de trabajo y enfermedades
                            profesionales son factores que interfieren en el desarrollo normal de la actividad empresarial, incidiendo negativamente
                            en su productividad y por consiguiente amenazando su solidez y permanencia en el mercado; conllevando además graves
                            implicaciones en el ámbito laboral, familiar y social.</p>

                        <p>Por ende la administración y la gerencia de toda compañía deben asumir su responsabilidad en buscar y poner en práctica
                            las medidas necesarias que contribuyen a mantener y mejorar los niveles de eficiencia en las operaciones de la empresa y
                            brindar a sus trabajadores un medio laboral seguro.</p>

                        <p>De acuerdo a lo anterior hemos creado una empresa joven la cual cuenta con un talento humano idóneo con la más alta
                            experiencia en el manejo de asesoría y consultoría en desarrollo social y aseguramiento de la salud en la cual nos
                            encargamos de minimizarle los trámites al momento de usted vincular a sus colaboradores al Sistema General de Seguridad
                            Social en Salud - SGSSS.</p>

                        <p>La seguridad social, es un servicio público de carácter obligatorio a la ciudadanía y está conformado por los regímenes
                            generales establecidos para salud, pensiones,reiesgos laborales, subsidio familiar y los servicios sociales complementarios
                            que se definen en la ley.</p>

                        <p>El principal beneficio que tiene un trabajador en un empleo formal es su vinculación al sistema de seguridad social intergral ,
                            sitema que busca protegerlo de las eventualidades que se pueden presentar y que requieren presentar y que requieren una especial
                            atención en aras de garantizar su bienestar general y también el de su familia.</p>

                        <p>Entre estas eventualidades se encuentra la de alteración a la salud , incapacidad laboral, muerte, desempleo y vejez, y para
                            cuya protección se establecieron los sistemas de Salud, Riesgos Laborales, Pensiones y de Subsidio Familiar.</p>
                    </div>
                    <div class="tab-pane" id="Condiciones">
                        <h3 class="display-4">Condiciones generales</h3>
                        <hr class="my-4">
                        <p>Persona que tiene derecho a que se le pague periódicamente el salario pactado, por esta persona en el Sistema de Seguridad
                            Social Integral al pago de las prestaciones sociales.</p>

                        <p>Debe tener en cuenta:</p>

                        <p><strong>"Intersalud del Valle SAS."</strong> suministra la asistencia pertinente que su empresa requiere frente a la compensación de los aportes
                            realizados al SGSSS a través de las diferentes EPS, AFP y ARL de la siguiente manera:</p>
                        <ul>

                            <li type="circle">Suscribir los formularios y aportar los documentos requeridos para su afiliación a las entidades anteriores. (EPS, AFP y ARL).</li>
                            <li type="circle">Identificar los beneficiarios para se postulados, a la Caja de Compensacion Familiar (CCF) y hacer entrega de los documentos requeridos.</li>
                            La Afiliacion a la Administradora de Riesgos Laborales (ARL) la realizara el empleador y depende del riesgo en el que esté clasificada su
                            actividad y este va del R1 al R5.</li>
                            <li type="circle">Cada trabajador tendrá una compensación de acuerdo a lo que estipule el aportante para realizar el pago de su seguridad social (no inferior
                                a un salario mínimo legal vigente).</li>
                            <li type="circle">Las compensaciones para el pago de los aportes se realizarán en nuestras oficinas, donde se le hará entrega de su factura y sera de manera
                                personal, o ha través de una entidad financiera donde podrá consignar sus aportes en nuestras cuentas bancarias (los primeros 3 dias hábiles
                                de cada mes para el pago de incapacidades Decreto 1804 de 1999).</li>
                            <li type="circle">Los reportes de novedades presentadas en la autoliquidación del asociado se efectuarán en las fechas y formas a convenir.
                                Con nuestra firma (Intersalud del Valle S.A.S.) usted puede pertenecer al régimen contributivo en salud de forma Dependiente, Independiente o como Contratista.
                            </li>
                        </ul>
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

@endsection 
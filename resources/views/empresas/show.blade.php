@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
</div>
<div class="col-sm-8">

    <h1 align="center">Informacion Empresas</h1>
</div>

<div class="col-sm-3">

    @include('empresas.fragment.error')

</div>




<div class="col-md-12">

    <div class="table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <div class="container">
                <div class="row">
                    <tbody>
                        <tr>
                            <td><strong>nit: </strong></td>
                            <td>{{$empresa->nit}}</td>
                            <td><strong>Nombre: </strong></td>
                            <td> {{$empresa->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>Nombre del contacto: </strong></td>
                            <td> {{$empresa->nombre_contacto}} </td>
                            <td><strong>Telefono contacto: </strong></td>
                            <td> {{$empresa->telefono_contacto}} </td>
                        </tr>

                        <tr>
                            <td><strong>Email contacto: </strong></td>
                            <td> {{$empresa->email_contacto}} </td>
                            <td><strong>Ciudad: </strong></td>
                            <td> {{$ciudad->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>Direccion: </strong></td>
                            <td> {{$empresa->direccion}} </td>
                            <td><strong>Estado </strong></td>
                            <td>
                                @if($empresa->estado == 1)
                                Activo

                                @endif
                                @if($empresa->estado == 2)
                                Retirado
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Beneficio: </strong></td>
                            <td>
                                @if($empresa->beneficio == 1)
                                No

                                @endif
                                @if($empresa->beneficio == 2)
                                Si
                                @endif
                            </td>
                            <td><strong>Inscripcion: </strong></td>
                            <td> {{$empresa->inscripcion}} </td>
                        </tr>

                        <tr>
                            <td><strong>Administracion: </strong></td>
                            <td> {{$empresa->administracion}} </td>
                            <td><strong>Fecha de ingreso: </strong></td>
                            <td> {{$empresa->fecha_ingreso}}</td>
                        </tr>

                        <tr>
                            <td><strong>Observacion: </strong></td>
                            <td colspan="3"> {{$empresa->observacion}} </td>
                        </tr>

                    </tbody>
                </div>
            </div>
        </table>
    </div>
</div>
<br>
<div class="col-md-12" style="background-color: #fff; padding: 4rem"   >
    <h3>Empleados Inscritos</h3>
        <br>
    <div  class="table-responsive table-full-width">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Identificacion</th>
                    <th>Nombres</th>
                    <th>Salario</th>
                    <th>Pago</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                    <tr>
                        <td>{{$empleado->identificacion}}</td>
                        <td>{{$empleado->nombres}} {{$empleado->apellidos}}</td>
                        <td>{{$empleado->salario}}</td>
                        <td>{{$empleado->pago}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2"></td>
                    <td><strong>Inscripción + IVA </strong></td>
                    <td>{{$ivaadmi}}</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td><strong>Administración + IVA</strong></td>
                    <td>{{$ivainsc}}</td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td><h4 style="font-weight: bold;">Total a pagar</h4></td>
                    <td><h4>{{$total}}</h4></td>
                </tr>
            </tbody>
        </table>

        <a class="btn btn-primary" type="submit" style="float: right; width: 50%" href="{{route('empresa.index')}}">Finalizar</a>
        <a class="btn btn-primary" type="submit" style="float: right; width: 50%" href="{{route('empresa.pagocaja', $empresa->id)}}">Pagar</a>
    </div>
</div>




@endsection 
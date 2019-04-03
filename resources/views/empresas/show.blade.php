@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
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
                        </tr>

                        <tr>
                            <td><strong>Nombre: </strong></td>
                            <td> {{$empresa->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>Nombre del contacto: </strong></td>
                            <td> {{$empresa->nombre_contacto}} </td>
                        </tr>

                        <tr>
                            <td><strong>Telefono contacto: </strong></td>
                            <td> {{$empresa->telefono_contacto}} </td>
                        </tr>

                        <tr>
                            <td><strong>Email contacto: </strong></td>
                            <td> {{$empresa->email_contacto}} </td>
                        </tr>

                        <tr>
                            <td><strong>Ciudad: </strong></td>
                            <td> {{$ciudad->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>Direccion: </strong></td>
                            <td> {{$empresa->direccion}} </td>
                        </tr>

                        <tr>
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
                        </tr>

                        <tr>
                            <td><strong>Inscripcion: </strong></td>
                            <td> {{$empresa->inscripcion}} </td>
                        </tr>

                        <tr>
                            <td><strong>Administracion: </strong></td>
                            <td> {{$empresa->administracion}} </td>
                        </tr>

                        <tr>
                            <td><strong>Fecha de ingreso: </strong></td>
                            <td> {{$empresa->fecha_ingreso}}</td>
                        </tr>

                        <tr>
                            <td><strong>Observacion: </strong></td>
                            <td> {{$empresa->observacion}} </td>
                        </tr>







                    </tbody>
                </div>
            </div>
        </table>
    </div>
</div>

<div class="col-md-12">
    <h2 align="center">Empleados</h2>
    <div class="content table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <div class="container">
                <div class="row">
                    <thead>
                        <th>nuip</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th>Tipo Cliente</th>
                        <th>Telefono</th>
                        <th>Rango</th>
                        <th>Accion</th>

                    </thead>
                    <tbody>
                        @foreach ($empleado_empresas as $empleado_empresa)
                        <tr>
                            <th>{{$empleado_empresa->identificacion}}</th>
                            <th>{{$empleado_empresa->nombres}}</th>
                            <th>{{$empleado_empresa->apellidos}}</th>
                            <th>{{$empleado_empresa->estado}}</th>
                            <th>{{$empleado_empresa->telefono}}</th>
                            <th>{{$empleado_empresa->email}}</th>
                            <th>

                                <a href="{{route('empleado_empresa.show', $empleado_empresa->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <a href="{{route('empleado_empresa.edit', $empleado_empresa->id)}}"><i class="fas fa-pen"></i></a>

                            </th>

                        </tr>
                        @endforeach

                    </tbody>
                </div>
            </div>
        </table>
        <div align="center">
            {!!$empleado_empresas->render() !!}
        </div>
    </div>
</div>
@endsection 
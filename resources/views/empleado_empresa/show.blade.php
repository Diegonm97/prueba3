@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="{{ route('empleado_empresa.index') }}"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8">

    <h1 align="center">Informacion de empleado empresa</h1>
</div>
<div class="col-sm-3">

    @include('empleado_empresa.fragment.error')

</div>


<div class="col-md-12">

    <div class="table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <div class="container">
                <div class="row">
                    <tbody>
                        <tr>
                            <td><strong>Empresa: </strong></td>
                            <td>{{$empresa->nombre}}</td>
                        </tr>

                        <tr>
                            <td><strong>identificacion: </strong></td>
                            <td> {{$empleadoEmp->identificacion}} </td>
                        </tr>

                        <tr>
                            <td><strong>Tipo id: </strong></td>
                            <td>
                                @if($empleadoEmp->tipo_id == 1)
                                CC

                                @endif
                                @if($empleadoEmp->tipo_id == 2)
                                PASAPORTE
                                @endif
                                @if($empleadoEmp->tipo_id == 3)
                                PERMISO DE TRABAJO
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Nombres: </strong></td>
                            <td> {{$empleadoEmp->nombres}} </td>
                        </tr>

                        <tr>
                            <td><strong>Apellidos: </strong></td>
                            <td> {{$empleadoEmp->apellidos}} </td>
                        </tr>

                        <tr>
                            <td><strong>Telefono: </strong></td>
                            <td> {{$empleadoEmp->telefono}} </td>
                        </tr>

                        <tr>
                            <td><strong>Direccion: </strong></td>
                            <td> {{$empleadoEmp->direccion}} </td>
                        </tr>

                        <tr>
                            <td><strong>Email: </strong></td>
                            <td> {{$empleadoEmp->email}} </td>
                        </tr>

                        <tr>
                            <td><strong>Tipo cliente: </strong></td>
                            <td>
                                @if($empleadoEmp->tipo_cliente == 1)
                                INDEPENDIENTE
                                @endif
                                @if($empleadoEmp->tipo_cliente == 2)
                                ASOCIADO
                                @endif
                                @if($empleadoEmp->tipo_cliente == 3)
                                EMPRESA
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Fecha ingreso: </strong></td>
                            <td> {{$empleadoEmp->fecha_ingreso}} </td>
                        </tr>

                        <tr>
                            <td><strong>Fecha de nacimiento: </strong></td>
                            <td> {{$empleadoEmp->fecha_nacimiento}} </td>
                        </tr>

                        <tr>
                            <td><strong>Salario: </strong></td>
                            <td> {{$empleadoEmp->salario}} </td>
                        </tr>

                        <tr>
                            <td><strong>Rango: </strong></td>
                            <td> {{$empleadoEmp->rango}} </td>
                        </tr>

                        <tr>
                            <td><strong>UPC: </strong></td>
                            <td> {{$empleadoEmp->upc}} </td>
                        </tr>

                        <tr>
                            <td><strong>ciudad: </strong></td>
                            <td> {{$ciudad->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>EPS: </strong></td>
                            <td> {{$eps->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>ARL: </strong></td>
                            <td> {{$arl->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>AFP: </strong></td>
                            <td> {{$afp->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>Caja de Compensacion: </strong></td>
                            <td> {{$cajacomp->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>Estado: </strong></td>
                            <td>
                                @if($empleadoEmp->estado == 1)
                                Activo

                                @endif
                                @if($empleadoEmp->estado == 2)
                                Retirado
                                @endif
                            </td>
                        </tr>

                         <?php if(isset($empleadoEmp->pago)){ ?>
                        <tr>
                            <td><strong>Total a pagar:</strong></td>
                            <td>{{$empleadoEmp->pago}}</td>
                        </tr>
                        <?php } ?>


                    </tbody>
                </div>
            </div>
        </table>
        <a class="btn btn-primary" style="float: right; width: 100%" href="{{route('empleado_empresa.facturacion', $empleadoEmp->id)}}">Facturar</a>
    </div>
</div>






@endsection 
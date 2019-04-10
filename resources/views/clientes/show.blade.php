@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="{{ route('clientes.index') }}"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8">

    <h1 align="center">Información Cliente</h1>
</div>
<div class="col-sm-3">

    @include('clientes.fragment.error')

</div>


<div class="col-md-12">

    <div class="table-responsive table-full-width" style="font-size: 18px">
        <table class="table table-hover table-striped">
            <div class="container">
                <div class="row">
                    <tbody>
                        <tr>
                            <td><strong>Identificación: </strong></td>
                            <td>{{$cliente->identificacion}}</td>

                            <td><strong>Tipo Id: </strong></td>
                            <td>
                                @if($cliente->tipo_id == 1)
                                CC

                                @endif
                                @if($cliente->tipo_id == 2)
                                PASAPORTE
                                @endif
                                @if($cliente->tipo_id == 3)
                                PERMISO DE TRABAJO
                                @endif
                            </td>
                        </tr>
                         <tr>
                            <td><strong>Nombre(s): </strong></td>
                            <td> {{$cliente->nombres}} </td>

                            <td><strong>Apellido(s): </strong></td>
                            <td> {{$cliente->apellidos}} </td>
                        </tr>

                        <tr>
                            <td><strong>Estado: </strong></td>
                            <td>
                                @if($cliente->estado == 1)
                                Activo

                                @endif
                                @if($cliente->estado == 2)
                                Retirado
                                @endif
                            </td>

                            <td><strong>Teléfono: </strong></td>
                            <td> {{$cliente->telefono}} </td>
                        </tr>

                        <tr>
                            <td><strong>Dirección: </strong></td>
                            <td> {{$cliente->direccion}} </td>

                            <td><strong>Email: </strong></td>
                            <td> {{$cliente->email}} </td>
                        </tr>

                        <tr>
                            <td><strong>Tipo Cliente: </strong></td>
                            <td>
                                @if($cliente->tipo_cliente == 1)
                                INDEPENDIENTE
                                @endif
                                @if($cliente->tipo_cliente == 2)
                                ASOCIADO
                                @endif

                            </td>

                            <td><strong>Fecha Ingreso: </strong></td>
                            <td> {{$cliente->fecha_ingreso}} </td>
                        </tr>

                        <tr>
                            <td><strong>Fecha Nacimiento: </strong></td>
                            <td> {{$cliente->fecha_nacimiento}} </td>

                            <td><strong>Salario: </strong></td>
                            
                            <td> {{number_format($cliente->salario,0,',','.')}} </td>
                        </tr>

                        <tr>
                            <td><strong>Ciudad: </strong></td>
                            <td> {{$ciudad->nombre}} </td>

                            <td><strong>EPS: </strong></td>
                            <td> {{$eps->nombre}} </td>
                        </tr>

                        <tr>
                            <td><strong>ARL: </strong></td>
                            <?php if (isset($arl)) { ?>
                                <td> {{$arl->nombre}} </td>
                            <?php } else { ?>
                                <td> NO </td>
                            <?php } ?>

                            <td><strong>AFP: </strong></td>
                            <td> {{$afp->nombre}} </td>

                        </tr>

                        <tr>
                            <td><strong>Caja de Compensación: </strong></td>
                            <?php if (isset($cajacomp)) { ?>
                                <td> {{$cajacomp->nombre}} </td>
                            <?php } else { ?>
                                <td> NO </td>
                            <?php } ?>

                            <td><strong>Beneficio: </strong></td>
                            <td>
                                @if($cliente->beneficio == 1)
                                No

                                @endif
                                @if($cliente->beneficio == 2)
                                Si
                                @endif

                            </td>
                        </tr>

                        <tr>
                            <td><strong>Rango: </strong></td>
                            <td> {{$cliente->rango}} </td>

                            <td><strong>UPC Adic.: </strong></td>
                            <td> $ {{ number_format($cliente->upc)}} </td>
                        </tr>

                        <tr>
                            <td><strong>Inscripción: </strong></td>
                            <td> ${{ number_format($cliente->inscripcion,0,',','.')}} </td>

                            <td><strong>Administración: </strong></td>
                            <td> ${{ number_format($cliente->administracion,0,',','.')}} </td>
                        </tr>

                        <tr>
                            <td><strong>Observación: </strong></td>
                            <td> {{$cliente->observacion}} </td>

                            <?php if(isset($cliente->pago)){ ?>
                        
                            <td><strong>Total a pagar:</strong></td>
                            <td> ${{ number_format($cliente->pago,0,',','.')}}</td>
                        
                        <?php } ?>
                        </tr>
                    </tbody> 
                </div>
            </div>
        </table>

        <a class="btn btn-primary" style="float: right; width: 100%" href="{{route('clientes.facturacion', $cliente->id)}}">Facturar</a>
        
    </div>
    </div>  
</div>






@endsection 
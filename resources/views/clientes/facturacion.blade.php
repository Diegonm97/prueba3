@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8">

    <h3 align="center">FACTURACIÓN CLIENTE: {{$cliente->nombres }} {{$cliente->apellidos}}</h3>
    <br>
</div>
<div class="col-sm-3">

    @include('clientes.fragment.error')

</div>


<div class="col-md-12">

    <div class="table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <div class="container">
                <div class="row">
                    <tbody>
                        <tr>
                            <td><strong>Administracion + IVA: </strong></td>
                            <td>{{$ivaadmi}}</td>
                        </tr>

                        <tr>
                            <td><strong>Inscripcion + IVA: </strong></td>
                            <td> {{$ivainsc}} </td>
                        </tr>

                        <tr>
                            <td><strong>EPS: </strong></td>
                            <td> {{$epst}} </td>
                        </tr>

                        <tr>
                            <td><strong>ARL: </strong></td>
                            <td> {{$arlt}} </td>
                        </tr>

                        <tr>
                            <td><strong>AFP: </strong></td>
                            <td> {{$afpt}} </td>
                        </tr>

                        <tr>
                            <td><strong>Caja de compensación: </strong></td>
                            <td> {{$cjct}} </td>
                        </tr>

                        <tr>
                            <td><strong>UPC: </strong></td>
                            <td> {{$upct}} </td>
                        </tr>

                        <tr>
                            <td><strong>SERCOFUN: </strong></td>
                            <td> {{$serc}} </td>
                        </tr>

                        <tr>
                            <td><strong>EMI: </strong></td>
                            <td> {{$emit}} </td>
                        </tr>

                        <tr>
                            <td><h4><strong>TOTAL: </strong></h4></td>
                            <td><h4><strong>{{$total}}</strong></h4> </td>
                        </tr>
                    </tbody>
                </div>
            </div>
        </table>

        <a class="btn btn-primary" type="submit" style="float: right; width: 33%" href="{{route('clientes.index')}}">Finalizar</a>
        <a class="btn btn-primary" type="submit" style="float: right; width: 33%" href="{{route('clientes.pagocaja', $cliente->id)}}">Pagar</a>
        <a class="btn btn-primary" type="submit" style="float: right; width: 33%" target="_blank" href="{{route('imprimir', $cliente->id)}}">pdf</a>
    </div>
</div>






@endsection 
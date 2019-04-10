@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-7">

    <h1 align="center">Informacion de la sede</h1>
</div>

<div class="col-sm-3">

    @include('sedes.fragment.error')

</div>



<div class="col-md-12">

    <div class="table-responsive table-full-width" style="font-size: 18px">
        <table class="table table-hover table-striped">
            <div class="container">
                <div class="row">
                    <tbody>
                        <tr>
                            <td><strong>Nombre: </strong></td>
                            <td>{{$sede->nombre}}</td>

                            <td><strong>Ciudad: </strong></td>
                            <td> {{$sede->id_ciudad}} </td>
                        </tr>

                        <tr>
                            <td><strong>Teléfono: </strong></td>
                            <td> {{$sede->telefono}} </td>

                            <td><strong>Dirección: </strong></td>
                            <td> {{$sede->direccion}} </td>
                        </tr>





                    </tbody>
                </div>
            </div>
        </table>
    </div>
</div>


@endsection
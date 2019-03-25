@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-7">

    <h1 align="center">Informacion de la ciudad</h1>
</div>

<div class="col-sm-3">

    @include('ciudades.fragment.error')

</div>



<div class="col-md-12">

    <div class="table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <div class="container">
                <div class="row">
                    <tbody>
                        <tr>
                            <td><strong>Nombre: </strong></td>
                            <td>{{$ciudades->nombre}}</td>
                        </tr>

                        <tr>
                            <td><strong>Tipo: </strong></td>
                            <td> {{$ciudades->codigo}} </td>
                        </tr>





                    </tbody>
                </div>
            </div>
        </table>
    </div>
</div>


@endsection 
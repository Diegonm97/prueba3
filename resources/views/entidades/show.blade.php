@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-7">

    <h1 align="center">Informacion de la entidad</h1>
</div>

<div class="col-sm-3">

    @include('entidades.fragment.error')

</div>



<div class="col-md-12">

    <div class="table-responsive table-full-width">
        <table class="table table-hover table-striped">
            <div class="container">
                <div class="row">
                    <tbody>
                        <tr>
                            <td><strong>Nombre: </strong></td>
                            <td>{{$entidades->nombre}}</td>
                        </tr>

                        <tr>
                            <td><strong>Tipo: </strong></td>
                            <td> @if($entidades->tipo == 1)
                                EPS
                                @endif
                                @if($entidades->tipo == 2)
                                ARL
                                @endif
                                @if($entidades->tipo == 3)
                                AFP
                                @endif
                                @if($entidades->tipo == 4)
                                CajaComp
                                @endif </td>
                        </tr>



                    </tbody>
                </div>
            </div>
        </table>
    </div>
</div>


@endsection 
@extends('layouts.apphome')
@section('content')

<div class="col-sm-12">
    <div class="col-m-3">
        @can('sede.create')
        <a href="{{route('sede.create')}}" class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
        @endcan</div>
    <div class="col-m-7">

        <h1 align="center">Informacion de Sedes</h1>
    </div>
    <div class="col-m-2">

        @include('sedes.fragment.info')

    </div>
    <br>
    <br>



</div>
<!-- Se recorren todas las sedes haciendo un nuevo div por cada nueva sede -->
<div class="col-sm-12">
    @foreach ($sedes as $sede)
    <div class="col-md-4">
        <div class="card">
            <div class="header">
                <h4 class="title">
                    <!-- Se llenan los datos con cada ciudad encontrada -->
                    @foreach($ciudades as $ciudad)
                    @if($ciudad->id == $sede->id_ciudad)

                    {{$ciudad->nombre}}

                    @endif
                    @endforeach
                    <p class="category"></p>

                    <div class="form group">



                    </div>

            </div>

            <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                    <div class="container">
                        <div class="row">
                            <tbody>

                                <tr>
                                <tr>
                                    <td><strong>Nombre: </strong></td>
                                    <td>{{$sede->nombre}}</td>
                                </tr>


                                <tr>
                                    <td><strong>Teléfono: </strong></td>
                                    <td> {{$sede->telefono}} </td>
                                </tr>

                                <tr>
                                    <td><strong>Dirección: </strong></td>
                                    <td> {{$sede->direccion}} </td>
                                </tr>
                                <tr>
                                <td></td>
                                <td>
                                   
                                    <a href="{{route('sede.edit', $sede->id)}}"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('sede.show', $sede->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="{{route('sede.destroy', $sede->id)}}"><i class="fas fa-trash-alt"></i></a>
                                </td>


                                </tr>

                                </tr>



                            </tbody>
                        </div>
                    </div>
                </table>
                <div align="center">
                    {!!$sedes->render() !!}
                </div>
            </div>
        </div>
    </div>

    @endforeach


</div>






@endsection
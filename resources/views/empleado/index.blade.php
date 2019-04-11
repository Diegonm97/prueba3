<?php
use App\Sede;
?>
@extends('layouts.apphome')
@section('content')

<div class="col-sm-3">

</div>

<div class="col-sm-6">

    <h1 align="center">Empleados</h1>
</div>
<div class="col-sm-2">

    @include('empleado.fragment.error')

</div>
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Empleados
                @can('empleado.create')
                <a href="{{route('empleado.create')}}" class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
            @endcan

            <p class="category">Aquí se muestran datos de los empleados de Intersalud Colombia.</p>
            {!!Form::open(['route'=>'empleado.index', 'method'=>'GET'])!!}
            <div class="col-md-3">
                <div class="form group">
                    {!!Form::text('nombre',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}

                </div>
            </div>
            {!!Form::close()!!}
        </div>

        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <div class="container">
                    <div class="row">
                        <thead>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Sede</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $emp)
                            <tr>
                                <th>{{$emp->nombre_completo}}</th>
                                @if ($emp->estado == 1)
                                <th>ACTIVO</th>
                                @elseif ($emp->estado == 2)
                                <th>INACTIVO</th>
                                @endif
                                <?php $sede = Sede::Search()->where('id', '=', $emp->id_sede)->first(); ?>
                                <th>{{$sede->nombre}}</th>
                                <th><a href="{{route('empleado.edit', $emp->id)}}"><i class="fas fa-pen"></i></a</th> </tr> @endforeach </tbody> </div> </div> </table> <div align="center">
                                        {!!$empleados->render() !!}
                    </div>
                </div>
        </div>
    </div>

    @endsection
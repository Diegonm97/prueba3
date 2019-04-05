@extends('layouts.apphome')
@section('content')

<div class="col-sm-3">

</div>

<div class="col-sm-6">

    <h1 align="center">Configuracion</h1>
</div>
<div class="col-sm-2">

    @include('configuracion.fragment.error')

</div>
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Configuración
                @can('Configuracion.create')
                <a href="{{route('configuracion.create')}}" class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
            @endcan

            <p class="category">Aquí se muestran datos de configuración. Si el valor es entero, omita los puntos Ej: 4000 (cuatro mil). Si el valor es en porcentaje, omita el simbolo (%).</p>
            {!!Form::open(['route'=>'configuracion.index', 'method'=>'GET','class'=>'navbar-form'])!!}
            <div class="form group">
                {!!Form::text('nombre',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}


            </div>
            {!!Form::close()!!}
        </div>

        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <div class="container">
                    <div class="row">
                        <thead>
                            <th>Nombre</th>
                            <th>Código</th>
                            <th>Valor</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($configuracion as $config)
                            <tr>
                                <th>{{$config->nombre}}</th>
                                <th>{{$config->codigo}}</th>
                                <th>{{$config->valor}}</th>
                                <th><a href="{{route('configuracion.edit', $config->id)}}"><i class="fas fa-pen"></i></a</th> </tr> @endforeach </tbody> </div> </div> </table> <div align="center">
                                        {!!$configuracion->render() !!}
                    </div>
                </div>
        </div>
    </div>

    @endsection 
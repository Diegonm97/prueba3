@extends('layouts.apphome')
@section('content')


<div class="col-m-9">

    <h1 align="center">Información de entidades</h1>
</div>
<div class="col-m-3">

    @include('entidades.fragment.info')

</div>

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Entidades
                <!-- Ruta al create de entidad -->
                @can('Entidades.create')
                <a href="{{route('entidad.create')}}" class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
            @endcan

            <p class="category">Aqui se muestran datos de las entidades registradas</p>
            <!-- Buscador -->
            {!!Form::open(['route'=>'entidad.index', 'method'=>'GET'])!!}
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
                            <th>Tipo</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($entidades as $entidad)
                            <tr>
                                <th>{{$entidad->nombre}}</th>
                                <th>
                                    @if($entidad->tipo == 1)
                                    EPS

                                    @endif
                                    @if($entidad->tipo == 2)
                                    ARL

                                    @endif
                                    @if($entidad->tipo == 3)
                                    AFP

                                    @endif
                                    @if($entidad->tipo == 4)
                                    CajaComp

                                    @endif

                                </th>

                                <th>
                                    <!-- Ruta al show de entidades -->
                                    @can('Entidades.show')
                                    <a href="{{route('entidad.show', $entidad->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endcan
                                    <!-- Ruta al edit de entidades -->
                                    @can('Entidades.edit')
                                    <a href="{{route('entidad.edit', $entidad->id)}}"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endcan
                                    @role('administrador')
                                    <a href="{{route('entidad.destroy', $entidad->id)}}"><i class="fas fa-trash-alt"></i></a>
                                    @endrole
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </div>
                </div>
            </table>
            <div align="center">
                {!!$entidades->render() !!}
            </div>
        </div>
    </div>
</div>






@endsection
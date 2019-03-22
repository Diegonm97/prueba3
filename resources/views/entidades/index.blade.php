@extends('layouts.apphome')
@section('content')


<div class="col-m-9" >
    
    <h1 align="center">Informacion de entidades</h1>
</div>
<div class="col-m-3">
    
    @include('entidades.fragment.info')

</div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Entidades
                                    @can('Entidades.create')
                                    <a href="{{route('entidad.create')}}"class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
                                    @endcan

                                <p class="category">Aqui se muestran datos de las entidades registradas</p>
                            {!!Form::open(['route'=>'entidad.index', 'method'=>'GET','class'=>'navbar-form'])!!}
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
                                            <th>Tipo</th>
                                        	<th></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($entidades as $entidad)
                                        <tr>
                                        	<th>{{$entidad->nombre}}</th>
                                            <th>{{$entidad->tipo}}</th>
                                            
                                            <th>
                                                @can('Entidades.show')
                                                <a href="{{route('entidad.show', $entidad->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                @can('Entidades.edit')                                 
                                            <a href="{{route('entidad.edit', $entidad->id)}}"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                
                                            
                                            
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
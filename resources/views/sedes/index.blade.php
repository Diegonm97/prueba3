@extends('layouts.apphome')
@section('content')


<div class="col-m-9" >
    
    <h1 align="center">Informacion de Sedes</h1>
</div>
<div class="col-m-3">
    
    @include('sedes.fragment.info')

</div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sedes
                                    @can('sede.create')
                                    <a href="{{route('sede.create')}}"class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
                                    @endcan

                                <p class="category">Aqui se muestran datos de las Sedes registradas</p>
                            {!!Form::open(['route'=>'sede.index', 'method'=>'GET','class'=>'navbar-form'])!!}
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
                                            <th>ciudad</th>
                                            <th>telefono</th>
                                        	<th>direccion</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($sedes as $sede)
                                        <tr>
                                        	<th>{{$sede->nombre}}</th>
                                            <th>{{$sede->id_ciudad}}</th>
                                            <th>{{$sede->telefono}}</th>
                                            <th>{{$sede->direccion}}</th>
                                            
                                            <th>
                                                @can('sedes.show')
                                                <a href="{{route('sede.show', $sede->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                @can('ciudades.edit')                                 
                                            <a href="{{route('sede.edit', $sede->id)}}"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                
                                            
                                            
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
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

                    




@endsection
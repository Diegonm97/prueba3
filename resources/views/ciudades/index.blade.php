@extends('layouts.apphome')
@section('content')


<div class="col-m-9" >
    
    <h1 align="center">Informacion de ciudades</h1>
</div>
<div class="col-m-3">
    
    @include('ciudades.fragment.info')

</div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Ciudades
                                    @can('ciudades.create')
                                    <a href="{{route('ciudad.create')}}"class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
                                    @endcan

                                <p class="category">Aqui se muestran datos de las ciudades registradas</p>
                            {!!Form::open(['route'=>'ciudad.index', 'method'=>'GET','class'=>'navbar-form'])!!}
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
                                            <th>Codigo</th>
                                        	<th></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($ciudades as $ciudad)
                                        <tr>
                                        	<th>{{$ciudad->nombre}}</th>
                                            <th>{{$ciudad->codigo}}</th>
                                            
                                            <th>
                                                @can('ciudades.show')
                                                <a href="{{route('ciudad.show', $ciudad->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                @can('ciudades.edit')                                 
                                            <a href="{{route('ciudad.edit', $ciudad->id)}}"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                
                                            
                                            
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    </div>
                                </div>
                                </table>
                                <div align="center">
                                        {!!$ciudades->render() !!}
                                </div>
                                </div>
                            </div>
                        </div>

                    




@endsection
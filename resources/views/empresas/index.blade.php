@extends('layouts.apphome')
@section('content')


<div class="col-m-9" >
    
    <h1 align="center">Informacion Empresas</h1>
</div>
<div class="col-m-3">
    
    @include('empresas.fragment.info')

</div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Empresas
                                    @can('Empresas.create')
                                    <a href="{{route('empresas.create')}}"class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
                                    @endcan

                                <p class="category">Aqui se muestran datos de los empresas registradas</p>
                            {!!Form::open(['route'=>'empresas.index', 'method'=>'GET','class'=>'navbar-form'])!!}
                                <div class="form group">
                                    {!!Form::number('nuip',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}
                                    
                                    
                                </div>
                            {!!Form::close()!!}
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <div class="container">
                                        <div class="row">
                                    <thead>
                                          	<th>nuip</th>
                                            <th>Nombre</th>
                                        	<th>Estado</th>
                                        	<th>Tipo Cliente</th>
                                            <th>Telefono</th>
                                        	<th>Rango</th>
                                        	<th>Acción</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($empresas as $empresa)
                                        <tr>
                                        	<th>{{$empresa->nuip}}</th>
                                            <th>{{$empresa->nombreEmp}}</th>
                                            <th>{{$empresa->estadoEmp}}</th>
                                            <th>{{$empresa->tipoIdEmp}}</th>
                                            <th>{{$empresa->telefonoEmp}}</th>
                                            <th>{{$empresa->rangoEmp}}</th>
                                            <th>
                                                @can('Empresas.show')
                                                <a href="{{route('empresas.show', $empresa->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                @can('Empresas.edit')                                 
                                            <a href="{{route('empresas.edit', $empresa->id)}}"><i class="fas fa-pen"></i></a>
                                                @endcan
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    </div>
                                </div>
                                </table>
                                <div align="center">
                                        {!!$empresas->render() !!}
                                </div>
                                </div>
                            </div>
                        </div>

                    




@endsection
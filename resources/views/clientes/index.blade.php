@extends('layouts.apphome')
@section('content')


<p>
    
    <h1 align="center">Informacion Clientes</h1>
</p>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Clientes
                                    <a href="{{route('clientes.create')}}"class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>


                                <p class="category">Aqui se muestran datos de los clientes registrados</p>
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
                                        @foreach ($clientes as $cliente)
                                        <tr>
                                        	<th>{{$cliente->nuip}}</th>
                                            <th>{{$cliente->nombreCli}}</th>
                                            <th>{{$cliente->estadoCli}}</th>
                                            <th>{{$cliente->tipoIdCli}}</th>
                                            <th>{{$cliente->telefonoCli}}</th>
                                            <th>{{$cliente->rangoCli}}</th>
                                            <th><a href="{{route('clientes.show', $cliente->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                                            
                                            <a href="{{route('clientes.edit', $cliente->id)}}"><i class="fas fa-pen"></i></a>
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    </div>
                                </div>
                                </table>
                                </div>
                            </div>
                        </div>

                    </div>




@endsection
@extends('layouts.apphome')
@section('content')


<div class="col-m-9" >
    
    <h1 align="center">Informacion de pagos</h1>
</div>
<div class="col-m-3">
    
    @include('pagos.fragment.info')

</div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Pagos
                                    @can('pagos.create')
                                    <a href="{{route('pago.create')}}"class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
                                    @endcan

                                <p class="category">Aqui se muestran datos de los pagos registradas</p>
                            {!!Form::open(['route'=>'pago.index', 'method'=>'GET','class'=>'navbar-form'])!!}
                                <div class="form group">
                                    {!!Form::text('nuipPago',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}
                                    
                                    
                                </div>
                            {!!Form::close()!!}
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <div class="container">
                                        <div class="row">
                                    <thead>
                                          	<th>Nuip</th>
                                            <th>Nombre</th>
                                        	<th>Oficina</th>
                                        	<th>Proximo Pago</th>
                                            <th>Observaciones</th>
                                        	<th>Suma Total</th>
                                        	<th>Acción</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($pagos as $pago)
                                        <tr>
                                        	<th>{{$pago->nuipPago}}</th>
                                            <th>{{$pago->nombrePago}}</th>
                                            <th>{{$pago->oficinaPago}}</th>
                                            <th>{{$pago->proximoPago}}</th>
                                            <th>{{$pago->observacionPago}}</th>
                                            <th>{{$pago->sumTotalPago}}</th>
                                            <th>
                                                @can('pagos.show')
                                                <a href="{{route('pago.show', $pago->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                @can('pagos.edit')                                 
                                            <a href="{{route('pago.edit', $pago->id)}}"><i class="fas fa-pen"></i></a>
                                                @endcan
                            
                                            
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    </div>
                                </div>
                                </table>
                                <div align="center">
                                        {!!$pagos->render() !!}
                                </div>
                                </div>
                            </div>
                        </div>

                    




@endsection
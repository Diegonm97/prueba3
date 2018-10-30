@extends('layouts.apphome')
@section('content')


<div class="col-sm-9" >
    
    <h1 align="center">Editar Clientes</h1>
</div>
<div class="col-sm-3">
	
	@include('clientes.fragment.error')

</div>

 <p>				
 	{!! Form::model($cliente, ['route' => ['clientes.update', $cliente->id], 'method' => 'PUT']) !!}

        @include('clientes.fragment.form')

    {!! Form::close() !!}
</p>







@endsection
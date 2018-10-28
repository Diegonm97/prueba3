@extends('layouts.apphome')
@section('content')


<p>
    
    <h1 align="center">Editar Clientes</h1>
</p>

 <p>				
 	{!! Form::model($cliente, ['route' => ['clientes.update', $cliente->id], 'method' => 'PUT']) !!}

        @include('clientes.fragment.form')

    {!! Form::close() !!}
</p>







@endsection
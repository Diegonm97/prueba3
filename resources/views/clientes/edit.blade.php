@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="{{ route('clientes.index') }}"><i class="fas fa-arrow-alt-circle-left fa-3x" title="Volver a informacion Clientes" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8">

    <h1 align="center">Editar Clientes</h1>
</div>
<div class="col-sm-3">

    @include('clientes.fragment.error')



</div>
<!-- Incluye el form de clientes -->
<p>
    {!! Form::model($cliente, ['route' => ['clientes.update', $cliente->id], 'method' => 'PUT']) !!}

    @include('clientes.fragment.form')

    {!! Form::close() !!}
</p>







@endsection 
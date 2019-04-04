@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8">

    <h1 align="center">Editar Ciudad</h1>
</div>
<div class="col-sm-3">

    @include('ciudades.fragment.error')



</div>
<!-- Incluye el form de ciudades -->
<p>
    {!! Form::model($ciudades, ['route' => ['ciudad.update', $ciudades->id], 'method' => 'PUT']) !!}

    @include('ciudades.fragment.form')

    {!! Form::close() !!}
</p>







@endsection 
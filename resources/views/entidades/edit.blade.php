@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8">

    <h1 align="center">Editar entidad</h1>
</div>
<div class="col-sm-3">

    @include('entidades.fragment.error')



</div>

<p>
    {!! Form::model($entidades, ['route' => ['entidad.update', $entidades->id], 'method' => 'PUT']) !!}

    @include('entidades.fragment.form')

    {!! Form::close() !!}
</p>







@endsection 
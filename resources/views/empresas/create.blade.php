@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
	<a href="{{route ('empresa.index')}}"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8">
	<h1 align="center">Crear Empresas</h1>
</div>
<div class="col-sm-3">

	@include('empresas.fragment.error')
	<h4><strong>(*) : Campo obligatorio</strong></h4>

</div>
<!-- Incluye al form de empresas -->
<div class="col-sm-12">

	{!! Form::open(['route' => 'empresa.store']) !!}

	@include('empresas.fragment.form')

	{!! Form::close() !!}


</div>





@endsection
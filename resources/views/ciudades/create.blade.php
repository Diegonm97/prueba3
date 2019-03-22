@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
	<a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8" >
	<h1 align="center">Crear ciudades</h1>
</div>
<div class="col-sm-3">
	
	@include('ciudades.fragment.error')
	<h4><strong>(*) : Campo obligatorio</strong></h4>

</div>

<div class="col-sm-12">

 	{!! Form::open(['route' => 'ciudad.store']) !!}

        @include('ciudades.fragment.form')

    {!! Form::close() !!}


</div>
                    




@endsection
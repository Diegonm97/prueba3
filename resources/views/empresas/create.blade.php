@extends('layouts.apphome')
@section('content')


<div class="col-sm-9" >
	<h1 align="center">Crear Empresas</h1>
</div>
<div class="col-sm-3">
	
	@include('empresas.fragment.error')
	<h4><strong>(*) : Campo obligatorio</strong></h4>

</div>

<div class="col-sm-12">

 	{!! Form::open(['route' => 'empresa.store']) !!}

        @include('empresas.fragment.form')

    {!! Form::close() !!}


</div>
                    




@endsection
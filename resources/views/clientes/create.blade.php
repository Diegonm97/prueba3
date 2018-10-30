@extends('layouts.apphome')
@section('content')


<div class="col-sm-9" >
	<h1 align="center">Crear Clientes</h1>
</div>
<div class="col-sm-3">
	
	@include('clientes.fragment.error')

</div>

<div class="col-sm-12">

 	{!! Form::open(['route' => 'clientes.store']) !!}

        @include('clientes.fragment.form')

    {!! Form::close() !!}


</div>
                    




@endsection
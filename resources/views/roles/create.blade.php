@extends('layouts.apphome')
@section('content')


<div class="col-sm-9" >
	<h1 align="center">Crear roles</h1>
</div>
<div class="col-sm-3">
	
	@include('roles.fragment.error')

</div>

<div class="col-sm-12">

 	{!! Form::open(['route' => 'roles.store']) !!}

        @include('roles.fragment.form')

    {!! Form::close() !!}


</div>
                    




@endsection
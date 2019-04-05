@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
    <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8">

    <h1 align="center">Editar Empleado empresa</h1>
</div>
<div class="col-sm-3">

    @include('empleado_empresa.fragment.error')



</div>
<!-- Incluye el formulario de empleado_empresa -->
<p>
    {!! Form::model($empleadoEmp, ['route' => ['empleado_empresa.update', $empleadoEmp->id], 'method' => 'PUT']) !!}

    @include('empleado_empresa.fragment.form')

    {!! Form::close() !!}
</p>







@endsection 
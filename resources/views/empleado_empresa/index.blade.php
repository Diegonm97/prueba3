@extends('layouts.apphome')
@section('content')


<div class="col-m-9">

    <h1 align="center">Informacion Empleados de la empresa</h1>
</div>
<div class="col-m-3">

    @include('empleado_empresa.fragment.info')

</div>

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Empleados empresa
                <!-- Ruta al create de empleado_empresa -->
                @can('empleado_empresa.create')
                <a href="{{route('empleado_empresa.create')}}" class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
            @endcan

            <p class="category">Aqui se muestran datos de los empleados de la empresa registrados</p>
            <!-- Buscador -->
            {!!Form::open(['route'=>'empleado_empresa.index', 'method'=>'GET','class'=>'navbar-form'])!!}
            <div class="form group">
                {!!Form::number('identificacion',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}
            </div>
            {!!Form::close()!!}
        </div>

        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <div class="container">
                    <div class="row">
                        <thead>
                            <th>Identificacion</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Estado</th>
                            <th>Empresa</th>
                            <th>Telefono</th>
                            <th>Rango</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            <!-- Cada empleado de una empresa se toma uno por uno y se muestra su informacion -->
                            @foreach ($empleadoEmpS as $empleadoEmp)
                            <tr>
                                <th>{{$empleadoEmp->identificacion}}</th>
                                <th>{{$empleadoEmp->nombres}}</th>
                                <th>{{$empleadoEmp->apellidos}}</th>
                                <th>
                                    @if($empleadoEmp->estado == 1)
                                    Activo

                                    @endif
                                    @if($empleadoEmp->estado == 2)
                                    Retirado
                                    @endif
                                </th>
                                <th>

                                    @foreach($empresas as $empresa)
                                    @if($empresa->id == $empleadoEmp->id_empresa)

                                    {{$empresa->nombre}}

                                    @endif
                                    @endforeach
                                </th>
                                <th>{{$empleadoEmp->telefono}}</th>
                                <th>{{$empleadoEmp->rango}}</th>
                                <th>
                                    <!-- Ruta al show de empleado_empresa -->
                                    @can('empleado_empresa.show')
                                    <a href="{{route('empleado_empresa.show', $empleadoEmp->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endcan
                                    <!-- Ruta al edit de empleado_empresa -->
                                    @can('empleado_empresa.edit')
                                    <a href="{{route('empleado_empresa.edit', $empleadoEmp->id)}}"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endcan
                                    <a href="{{route('empleado_empresa.destroy', $empleadoEmp->id)}}"><i class="fas fa-trash-alt"></i></a>
                                </th>

                            </tr>
                            @endforeach


                        </tbody>
                    </div>
                </div>
            </table>
            <div align="center">
                {!!$empleadoEmpS->render() !!}
            </div>
        </div>
    </div>
</div>






@endsection 
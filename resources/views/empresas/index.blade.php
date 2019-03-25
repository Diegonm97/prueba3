@extends('layouts.apphome')
@section('content')


<div class="col-m-9">

    <h1 align="center">Informacion Empresas</h1>
</div>
<div class="col-m-3">

    @include('empresas.fragment.info')

</div>

<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Empresas
                @can('Empresas.create')
                <a href="{{route('empresa.create')}}" class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
            @endcan

            <p class="category">Aqui se muestran datos de los empresas registradas</p>
            {!!Form::open(['route'=>'empresa.index', 'method'=>'GET','class'=>'navbar-form'])!!}
            <div class="form group">
                {!!Form::text('idEmpresaContraEmp',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}


            </div>
            {!!Form::close()!!}
        </div>

        <div class="content table-responsive table-full-width">
            <table class="table table-hover table-striped">
                <div class="container">
                    <div class="row">
                        <thead>
                            <th>NIT</th>
                            <th>Nombre de la Empresa</th>
                            <th>Estado</th>
                            <th>Telefono</th>
                            <th>Nombre Contacto</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            @foreach ($empresas as $empresa)
                            <tr>
                                <th>{{$empresa->nit}}</th>
                                <th>{{$empresa->nombre}}</th>
                                <th>
                                    @if($empresa->estado ==1)
                                    Activo
                                    @endif

                                    @if($empresa->estado ==2)
                                    Retirado
                                    @endif

                                </th>

                                <th>{{$empresa->telefono_contacto}}</th>
                                <th>{{$empresa->nombre_contacto}}</th>
                                <th>
                                    @can('Empresas.show')
                                    <a href="{{route('empresa.show', $empresa->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endcan
                                    @can('Empresas.edit')
                                    <a href="{{route('empresa.edit', $empresa->id)}}"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    @endcan



                                </th>

                            </tr>
                            @endforeach


                        </tbody>
                    </div>
                </div>
            </table>
            <div align="center">
                {!!$empresas->render() !!}
            </div>
        </div>
    </div>
</div>






@endsection 
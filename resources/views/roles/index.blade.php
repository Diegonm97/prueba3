@extends('layouts.apphome')
@section('content')


<div class="col-m-9" >
    
    <h1 align="center">Roles</h1>
</div>
<div class="col-m-3">
    
    @include('roles.fragment.info')

</div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">roles
                                    @can('roles.create')
                                    <a href="{{route('roles.create')}}"class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></h4>
                                    @endcan

                                <p class="category">Aqui se muestran datos de los roles registrados</p>
                            {!!Form::open(['route'=>'roles.index', 'method'=>'GET','class'=>'navbar-form'])!!}
                                <div class="form group">
                                    {!!Form::number('nuip',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}
                                    
                                    
                                </div>
                            {!!Form::close()!!}
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <div class="container">
                                        <div class="row">
                                    <thead>
                                            <th>id</th>
                                            <th>Nombre</th>
                                            <th>Slug</th>
                                            <th>Descripcion</th>
                                            
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                        <tr>
                                            <th>{{$role->id}}</th>
                                            <th>{{$role->name}}</th>
                                            <th>{{$role->slug}}</th>
                                            <th>{{$role->description}}</th>
                                            
                                            <th>
                                                @can('roles.show')
                                                <a href="{{route('roles.show', $role->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                @can('roles.edit')                                 
                                            <a href="{{route('roles.edit', $role->id)}}"><i class="fas fa-pen"></i></a>
                                                @endcan
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    </div>
                                </div>
                                </table>
                                <div align="center">
                                        {!!$roles->render() !!}
                                </div>
                                </div>
                            </div>
                        </div>

                    




@endsection
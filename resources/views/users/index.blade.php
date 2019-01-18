@extends('layouts.apphome')
@section('content')


<div class="col-m-9" >
    
    <h1 align="center">Informacion Usuarios</h1>
</div>
<div class="col-m-3">
    
    @include('users.fragment.info')

</div>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Usuarios
                                    <p class="category">Aqui se muestran datos de los usuarios registrados</p>
                            {!!Form::open(['route'=>'users.index', 'method'=>'GET','class'=>'navbar-form'])!!}
                                <div class="form group">
                                    {!!Form::text('name',null,['class'=>'form-control' , 'placeholder'=>'Buscar..', 'aria-describedby'=>'search'])!!}
                                    
                                    
                                </div>
                            {!!Form::close()!!}
                            </div>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <div class="container">
                                        <div class="row">
                                    <thead>
                                          	<th>Id</th>
                                            <th>Nombre</th>
                                        	<th>Email</th>
                                        	
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                        	<th>{{$user->id}}</th>
                                            <th>{{$user->name}}</th>
                                            <th>{{$user->email}}</th>
                                            
                                            <th>
                                                @can('users.show')
                                                <a href="{{route('users.show', $user->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                @endcan
                                                @can('users.edit')                                 
                                            <a href="{{route('users.edit', $user->id)}}"><i class="fas fa-pen"></i></a>
                                                @endcan
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    </div>
                                </div>
                                </table>
                                <div align="center">
                                        {!!$users->render() !!}
                                </div>
                                </div>
                            </div>
                        </div>

                    




@endsection
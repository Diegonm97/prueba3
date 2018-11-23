@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
      <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8" >
    
    <h1 align="center">Informacion los Usuarios</h1>
</div>
<div class="col-sm-3">
      
      @include('users.fragment.error')

</div>


<div class="col-md-12">
                        
    <div class="table-responsive table-full-width">
    <table class="table table-hover table-striped">
        <div class="container">
            <div class="row">
        <tbody>
            <tr>
            <td><strong>Id: </strong></td>
            <td>{{$user->id}}</td>
            </tr>
        
            <tr>
            <td><strong>Nombre: </strong></td>
            <td>  {{$user->name}}  </td>
            </tr>

            <tr>
            <td><strong>Email: </strong></td>
            <td>  {{$user->email}}  </td>
            </tr>
            
            

            

            
        </tbody>
        </div>
    </div>
</table>
</div>
</div>








@endsection
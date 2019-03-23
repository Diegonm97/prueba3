@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
      <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-7" >
    
    <h1 align="center">Informacion Empresas</h1>
</div>

<div class="col-sm-3">
      
      @include('empresas.fragment.error')

</div>
<div class="col-sm-1" >
    <a href="{{route('createEmp',$empresa->id)}}" class="btn btn-default pull-right" aria-hidden="true"><i class="fas fa-plus"></i></a></div>



<div class="col-md-12">
                        
    <div class="table-responsive table-full-width">
    <table class="table table-hover table-striped">
        <div class="container">
            <div class="row">
        <tbody>
            <tr>
            <td><strong>nit: </strong></td>
            <td>{{$empresa->nit}}</td>
            </tr>
        
            <tr>
            <td><strong>Nombre: </strong></td>
            <td>  {{$empresa->nombre}}  </td>
            </tr>

            <tr>
            <td><strong>Nombre del contacto: </strong></td>
            <td>  {{$empresa->nombre_contacto}}  </td>
            </tr>

            <tr>
            <td><strong>Telefono contacto: </strong></td>
            <td>  {{$empresa->telefono_contacto}}  </td>
            </tr>

            <tr>
            <td><strong>Email contacto: </strong></td>
            <td>  {{$empresa->email_contacto}}  </td>
            </tr>

            <tr>
            <td><strong>Ciudad: </strong></td>
            <td>  {{$ciudad->nombre}}  </td>
            </tr>

            <tr>
            <td><strong>Direccion: </strong></td>
            <td>  {{$empresa->direccion}}  </td>
            </tr>

            <tr>
            <td><strong>Estado </strong></td>
            <td>  {{$empresa->estado}}  </td>
            </tr>

            <tr>
            <td><strong>Beneficio: </strong></td>
            <td>  {{$empresa->beneficio}}  </td>
            </tr>

            <tr>
            <td><strong>Inscripcion: </strong></td>
            <td>  {{$empresa->inscripcion}}  </td>
            </tr>

            <tr>
            <td><strong>Administracion: </strong></td>
            <td>  {{$empresa->administracion}}  </td>
            </tr>

            <tr>
            <td><strong>Fecha de ingreso: </strong></td>
            <td>  {{$empresa->fecha_ingreso}}</td>
            </tr>

            <tr>
            <td><strong>Observacion: </strong></td>
            <td>  {{$empresa->observacion}}  </td>
            </tr>

            
            

            

            
        </tbody>
        </div>
    </div>
</table>
</div>
</div>


@endsection
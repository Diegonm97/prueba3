@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
      <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8" >
    
    <h1 align="center">Informacion de empleado empresa</h1>
</div>
<div class="col-sm-3">
      
      @include('empleado_empresa.fragment.error')

</div>


<div class="col-md-12">
                        
    <div class="table-responsive table-full-width">
    <table class="table table-hover table-striped">
        <div class="container">
            <div class="row">
        <tbody>
            <tr>
            <td><strong>Nuip: </strong></td>
            <td>{{$empleadoEmp->id_empresa}}</td>
            </tr>
        
            <tr>
            <td><strong>identificacion: </strong></td>
            <td>  {{$empleadoEmp->identificacion}}  </td>
            </tr>

            <tr>
            <td><strong>Tipo id: </strong></td>
            <td>  {{$empleadoEmp->tipo_id}}  </td>
            </tr>

            <tr>
            <td><strong>Nombres: </strong></td>
            <td>  {{$empleadoEmp->nombres}}  </td>
            </tr>

            <tr>
            <td><strong>Apellidos: </strong></td>
            <td>  {{$empleadoEmp->apellidos}}  </td>
            </tr>

            <tr>
            <td><strong>telefono: </strong></td>
            <td>  {{$empleadoEmp->telefono}}  </td>
            </tr>

            <tr>
            <td><strong>direccion: </strong></td>
            <td>  {{$empleadoEmp->direccion}}  </td>
            </tr>

            <tr>
            <td><strong>email: </strong></td>
            <td>  {{$empleadoEmp->email}}  </td>
            </tr>

            <tr>
            <td><strong>tipo_cliente: </strong></td>
            <td>  {{$empleadoEmp->tipo_cliente}}  </td>
            </tr>

            <tr>
            <td><strong>fecha_ingreso: </strong></td>
            <td>  {{$empleadoEmp->fecha_ingreso}}  </td>
            </tr>

            <tr>
            <td><strong>fecha_nacimiento: </strong></td>
            <td>  {{$empleadoEmp->fecha_nacimiento}}  </td>
            </tr>

            <tr>
            <td><strong>Salario: </strong></td>
            <td>  {{$empleadoEmp->salario}}  </td>
            </tr>

            <tr>
            <td><strong>Rango: </strong></td>
            <td>  {{$empleadoEmp->rango}}  </td>
            </tr>

            <tr>
            <td><strong>upc: </strong></td>
            <td>  {{$empleadoEmp->upc}}  </td>
            </tr>

            <tr>
            <td><strong>ciudad: </strong></td>
            <td>  {{$ciudad->nombre}}  </td>
            </tr>

            <tr>
            <td><strong>id_eps: </strong></td>
            <td>  {{$empleadoEmp->id_eps}}  </td>
            </tr>

            <tr>
            <td><strong>id_arl: </strong></td>
            <td>  {{$empleadoEmp->id_arl}}  </td>
            </tr>

            <tr>
            <td><strong>AFP: </strong></td>
            <td>  {{$empleadoEmp->id_afp}}  </td>
            </tr>

            <tr>
            <td><strong>Caja de Compensacion: </strong></td>
            <td>  {{$empleadoEmp->id_cjc}}  </td>
            </tr>

            <tr>
            <td><strong>estado: </strong></td>
            <td>  {{$empleadoEmp->estado}}  </td>
            </tr>

          
        </tbody>
        </div>
    </div>
</table>
</div>
</div>






@endsection
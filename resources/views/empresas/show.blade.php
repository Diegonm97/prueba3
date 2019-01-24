@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
      <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8" >
    
    <h1 align="center">Informacion Empresas</h1>
</div>
<div class="col-sm-3">
      
      @include('empresas.fragment.error')

</div>


<div class="col-md-12">
                        
    <div class="table-responsive table-full-width">
    <table class="table table-hover table-striped">
        <div class="container">
            <div class="row">
        <tbody>
            <tr>
            <td><strong>Nuip: </strong></td>
            <td>{{$empresa->nuip}}</td>
            </tr>
        
            <tr>
            <td><strong>Nombre: </strong></td>
            <td>  {{$empresa->nombreEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Estado: </strong></td>
            <td>  {{$empresa->estadoEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Tipo: </strong></td>
            <td>  {{$empresa->tipoIdEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Direccion: </strong></td>
            <td>  {{$empresa->direccionEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Oficina: </strong></td>
            <td>  {{$empresa->oficinaEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Ciudad: </strong></td>
            <td>  {{$empresa->ciudadEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Telefono: </strong></td>
            <td>  {{$empresa->telefonoEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Email: </strong></td>
            <td>  {{$empresa->emailEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Fecha de Nacimiento: </strong></td>
            <td>  {{$empresa->fechaNacEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Salario: </strong></td>
            <td>  {{$empresa->salarioEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Rango: </strong></td>
            <td>  {{$empresa->rangoEmp}}  </td>
            </tr>

            <tr>
            <td><strong>EPS: </strong></td>
            <td>  {{$empresa->EPSEmp}}  </td>
            </tr>

            <tr>
            <td><strong>ARL: </strong></td>
            <td>  {{$empresa->ARLEmp}}  </td>
            </tr>

            <tr>
            <td><strong>AFP: </strong></td>
            <td>  {{$empresa->AFPEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Caja de Compensacion: </strong></td>
            <td>  {{$empresa->cajaCompEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Beneficio: </strong></td>
            <td>  {{$empresa->beneficioEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Fecha de Ingreso: </strong></td>
            <td>  {{$empresa->fechaIngEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Tipo empresa: </strong></td>
            <td>  {{$empresa->tipoEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Nuip Empresa: </strong></td>
            <td>  {{$empresa->idEmpresaContraEmp}}-{{$empresa->idNIT}}  </td>
            </tr>

            <tr>
            <td><strong>Nombre Empresa: </strong></td>
            <td>  {{$empresa->nombreEmpEmp}}  </td>
            </tr>

            <tr>
            <td><strong>UPC Adicional: </strong></td>
            <td>  {{$empresa->UPCadicEmp}}  </td>
            </tr>

            <tr>
            <td><strong>Estado: </strong></td>
            <td>  {{$empresa->estadoPago}}  </td>
            </tr>

            
            

            

            
        </tbody>
        </div>
    </div>
</table>
</div>
</div>








@endsection
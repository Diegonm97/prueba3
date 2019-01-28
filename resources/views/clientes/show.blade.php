@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
      <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-8" >
    
    <h1 align="center">Informacion Clientes</h1>
</div>
<div class="col-sm-3">
      
      @include('clientes.fragment.error')

</div>


<div class="col-md-12">
                        
    <div class="table-responsive table-full-width">
    <table class="table table-hover table-striped">
        <div class="container">
            <div class="row">
        <tbody>
            <tr>
            <td><strong>Nuip: </strong></td>
            <td>{{$cliente->nuip}}</td>
            </tr>
        
            <tr>
            <td><strong>Nombre: </strong></td>
            <td>  {{$cliente->nombreCli}}  </td>
            </tr>

            <tr>
            <td><strong>Estado: </strong></td>
            <td>  {{$cliente->estadoCli}}  </td>
            </tr>

            <tr>
            <td><strong>Tipo: </strong></td>
            <td>  {{$cliente->tipoIdCli}}  </td>
            </tr>

            <tr>
            <td><strong>Direccion: </strong></td>
            <td>  {{$cliente->direccionCli}}  </td>
            </tr>

            <tr>
            <td><strong>Oficina: </strong></td>
            <td>  {{$cliente->oficinaCli}}  </td>
            </tr>

            <tr>
            <td><strong>Ciudad: </strong></td>
            <td>  {{$cliente->ciudadCli}}  </td>
            </tr>

            <tr>
            <td><strong>Telefono: </strong></td>
            <td>  {{$cliente->telefonoCli}}  </td>
            </tr>

            <tr>
            <td><strong>Email: </strong></td>
            <td>  {{$cliente->emailCli}}  </td>
            </tr>

            <tr>
            <td><strong>Fecha de Nacimiento: </strong></td>
            <td>  {{$cliente->fechaNacCli}}  </td>
            </tr>

            <tr>
            <td><strong>Salario: </strong></td>
            <td>  {{$cliente->salarioCli}}  </td>
            </tr>

            <tr>
            <td><strong>Rango: </strong></td>
            <td>  {{$cliente->rangoCli}}  </td>
            </tr>

            <tr>
            <td><strong>EPS: </strong></td>
            <td>  {{$cliente->EPScli}}  </td>
            </tr>

            <tr>
            <td><strong>ARL: </strong></td>
            <td>  {{$cliente->ARLcli}}  </td>
            </tr>

            <tr>
            <td><strong>AFP: </strong></td>
            <td>  {{$cliente->AFPcli}}  </td>
            </tr>

            <tr>
            <td><strong>Caja de Compensacion: </strong></td>
            <td>  {{$cliente->cajaCompCli}}  </td>
            </tr>

            <tr>
            <td><strong>Beneficio: </strong></td>
            <td>  {{$cliente->beneficioCli}}  </td>
            </tr>

            <tr>
            <td><strong>Fecha de Ingreso: </strong></td>
            <td>  {{$cliente->fechaIngCli}}  </td>
            </tr>

            <tr>
            <td><strong>Tipo Cliente: </strong></td>
            <td>  {{$cliente->tipoCli}}  </td>
            </tr>

            <tr>
            <td><strong>Nuip Empresa: </strong></td>
            <td>  {{$cliente->idEmpresaContraCli}}-{{$cliente->idNIT}}  </td>
            </tr>

            <tr>
            <td><strong>Nombre Empresa: </strong></td>
            <td>  {{$cliente->nombreEmpCli}}  </td>
            </tr>

            <tr>
            <td><strong>UPC Adicional: </strong></td>
            <td>  {{$cliente->UPCadicCli}}  </td>
            </tr>

            <tr>
            <td><strong>Estado: </strong></td>
            <td>  {{$cliente->estadoPago}}  </td>
            </tr>

            
            

            

            
        </tbody>
        </div>
    </div>
</table>
</div>
</div>






@endsection
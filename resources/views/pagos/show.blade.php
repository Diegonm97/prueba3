@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
      <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
<div class="col-sm-7" >
    
    <h1 align="center">Informacion pagos</h1>
</div>

<div class="col-sm-4">
      
      @include('pagos.fragment.error')

</div>




<div class="col-md-12">
                        
    <div class="table-responsive table-full-width">
    <table class="table table-hover table-striped">
        <div class="container">
            <div class="row">
        <tbody>
            <tr>
            <td><strong>Nuip: </strong></td>
            <td>{{$pagos->nuipPago}}</td>
            </tr>
        
            <tr>
            <td><strong>Nombre: </strong></td>
            <td>  {{$pagos->nombrePago}}  </td>
            </tr>

            <tr>
            <td><strong>Oficina: </strong></td>
            <td>  {{$pagos->oficinaPago}}  </td>
            </tr>

            <tr>
            <td><strong>Telefono: </strong></td>
            <td>  {{$pagos->telefonoPago}}  </td>
            </tr>

            <tr>
            <td><strong>Email: </strong></td>
            <td>  {{$pagos->emailPago}}  </td>
            </tr>

            <tr>
            <td><strong>Salario: </strong></td>
            <td>  {{$pagos->salarioPago}}  </td>
            </tr>

            <tr>
            <td><strong>EPS: </strong></td>
            <td>  {{$pagos->EPSpago}}  </td>
            </tr>

            <tr>
            <td><strong>AFP: </strong></td>
            <td>  {{$pagos->AFPpago}}  </td>
            </tr>

            <tr>
            <td><strong>ARL: </strong></td>
            <td>  {{$pagos->ARLpago}}  </td>
            </tr>

            <tr>
            <td><strong>Caja de Compensacion: </strong></td>
            <td>  {{$pagos->cajaCompPago}}  </td>
            </tr>

            <tr>
            <td><strong>Mes: </strong></td>
            <td>  {{$pagos->mesPago}}  </td>
            </tr>

            <tr>
            <td><strong>Estado: </strong></td>
            <td>  {{$pagos->estadoClientePago}}  </td>
            </tr>

            <tr>
            <td><strong>Suma: </strong></td>
            <td>  {{$pagos->sumaPago}}  </td>
            </tr>

            <tr>
            <td><strong>Intereses: </strong></td>
            <td>  {{$pagos->interesesPago}}  </td>
            </tr>

            <tr>
            <td><strong>Suma Total: </strong></td>
            <td>  {{$pagos->sumTotalPago}}  </td>
            </tr>

            <tr>
            <td><strong>Abono: </strong></td>
            <td>  {{$pagos->abonoPago}}  </td>
            </tr>

            <tr>
            <td><strong>Forma Pago: </strong></td>
            <td>  {{$pagos->formaPago}}  </td>
            </tr>

            <tr>
            <td><strong>Proximo Pago: </strong></td>
            <td>  {{$pagos->proximoPago}}  </td>
            </tr>

            <tr>
            <td><strong>Observacion: </strong></td>
            <td>  {{$pagos->observacionPago}}  </td>
            </tr>

            <tr>
            <td><strong>Informe: </strong></td>
            <td>  {{$pagos->informePago}}  </td>
            </tr>

            <tr>
            <td><strong>Empresa Contratante: </strong></td>
            <td>  {{$pagos->empresaContPago}}  </td>
            </tr>

            <tr>
            <td><strong>Costo Administracion: </strong></td>
            <td>  {{$pagos->costoAdminPago}}  </td>
            </tr>

            <tr>
            <td><strong>EMI: </strong></td>
            <td>  {{$pagos->EMIpago}}  </td>
            </tr>

            <tr>
            <td><strong>Descuento: </strong></td>
            <td>  {{$pagos->descuentoPago}}  </td>
            </tr>

            <tr>
            <td><strong>UPC Adic.: </strong></td>
            <td>  {{$pagos->UPCadicPago}}  </td>
            </tr>

            <tr>
            <td><strong>Servicio Funerario: </strong></td>
            <td>  {{$pagos->sevFunePago}}  </td>
            </tr>

            <tr>
            <td><strong>Inscripcion: </strong></td>
            <td>  {{$pagos->inscripcionPago}}  </td>
            </tr>

            <tr>
            <td><strong>Activacion: </strong></td>
            <td>  {{$pagos->activacionPago}}  </td>
            </tr>

            <tr>
            <td><strong>Aporte Voluntario: </strong></td>
            <td>  {{$pagos->aporteVoluPago}}  </td>
            </tr>

            
            

            

            
        </tbody>
        </div>
    </div>
</table>
</div>
</div>

@endsection
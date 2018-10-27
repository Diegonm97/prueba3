@extends('layouts.apphome')
@section('content')


<p>
    
    <h1 align="center">Informacion Clientes</h1>
</p>

 <p>				
 	<strong>Nombre: </strong>{{$cliente->nombreCli}}<br/>
    <strong>Estado: </strong>{{$cliente->estadoCli}}<br/>
    <strong>Tipo: </strong>{{$cliente->tipoIdCli}}<br/> 
    <strong>Direccion: </strong>{{$cliente->direccionCli}} <br/>
    <strong>Oficina: </strong>{{$cliente->oficinaCli}} <br/>
    <strong>Ciudad: </strong>{{$cliente->ciudadCli}} <br/>
    <strong>Telefono: </strong>{{$cliente->telefonoCli}} <br/>
    <strong>Email: </strong>{{$cliente->emailCli}} <br/>
    <strong>Fecha de Nacimiento: </strong>{{$cliente->fechaNacCli}} <br/>
    <strong>Salario: </strong>{{$cliente->salarioCli}} <br/>
    <strong>Rango: </strong>{{$cliente->rangoCli}} <br/>
    <strong>EPS: </strong>{{$cliente->EPScli}} <br/>
    <strong>ARL: </strong>{{$cliente->ARLcli}} <br/>
    <strong>AFP: </strong>{{$cliente->AFPcli}} <br/>
    <strong>Caja de Compensacion: </strong>{{$cliente->cajaCompCli}} <br/>
    <strong>Beneficio: </strong>{{$cliente->beneficioCli}} <br/>
    <strong>Fecha de Ingreso: </strong>{{$cliente->fechaIngCli}} <br/>
    <strong>Empresa Contratante: </strong>{{$cliente->idEmpresaContraCli}}-{{$cliente->idNIT}}  <br/>
    <strong>Nombre Empresa: </strong>{{$cliente->nombreEmpCli}} <br/>
    <strong>UPC Adicional: </strong>{{$cliente->UPCadicCli}} <br/>
    <strong>Estado: </strong>{{$cliente->estadoPago}} <br/>
</p>


                    </div>




@endsection
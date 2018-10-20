@extends('layouts.apphome')
@section('content')


<p>
    
    <h1 align="center">Informacion Clientes</h1>
</p>

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Clientes</h4>
                                <p class="category">Aqui se muestran datos de los clientes registrados</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <div class="container">
                                        <div class="row">
                                    <thead>
                                          	<th>nuip</th>
                                            <th>Nombre</th>
                                        	<th>Estado</th>
                                        	<th>Tipo Cliente</th>
                                        	<th>Direccion</th>
                                            <th>Oficina</th>
                                        	<th>Ciudad</th>
                                        	<th>Telefono</th>
                                        	<th>Email</th>
                                        	<th>Fecha Nac.</th>
                                        	<th>Salario</th>
                                        	<th>Rango</th>
                                        	<th>EPS</th>
                                        	<th>ARL</th>
                                            <th>AFP</th>
                                        	<th>Caja Comp.</th>
                                        	<th>Beneficio</th>
                                        	<th>Fecha Ing.</th>
                                        	<th>ID emp.</th>
                                            <th>ID NIT</th>
                                            <th>Nombre Emp.</th>
                                        	<th>UPC adic.</th>
                                            <th>Estado pago</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientes as $cliente)
                                        <tr>
                                        	<th>{{$cliente->nuip}}</th>
                                            <th>{{$cliente->nombreCli}}</th>
                                            <th>{{$cliente->estadoCli}}</th>
                                            <th>{{$cliente->tipoIdCli}}</th>
                                            <th>{{$cliente->direccionCli}}</th>
                                            <th>{{$cliente->oficinaCli}}</th>
                                            <th>{{$cliente->ciudadCli}}</th>
                                            <th>{{$cliente->telefonoCli}}</th>
                                            <th>{{$cliente->emailCli}}</th>
                                            <th>{{$cliente->fechaNacCli}}</th>
                                            <th>{{$cliente->salarioCli}}</th>
                                            <th>{{$cliente->rangoCli}}</th>
                                            <th>{{$cliente->EPScli}}</th>
                                            <th>{{$cliente->ARLcli}}</th>
                                            <th>{{$cliente->AFPcli}}</th>
                                            <th>{{$cliente->cajaCompCli}}</th>
                                            <th>{{$cliente->beneficioCli}}</th>
                                            <th>{{$cliente->fechaIngCli}}</th>
                                            <th>{{$cliente->idEmpresaContraCli}}</th>
                                            <th>{{$cliente->idNIT}}</th>
                                            <th>{{$cliente->nombreEmpCli}}</th>
                                            <th>{{$cliente->UPCadicCli}}</th>
                                            <th>{{$cliente->estadoPago}}</th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>

                    </div>




@endsection
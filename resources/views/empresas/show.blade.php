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
            <td>  {{$empresa->nombreCli}}  </td>
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
            <td>  {{$empresa->nombreEmp}}  </td>
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


<div class="header">
            
                            
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
                                          <th>Telefono</th>
                                          <th>Rango</th>
                                          <th>Accion</th>
                                          
                                    </thead>
                                    <tbody>
                                        @foreach ($detalles as $cliente)
                                        <tr>
                                            <th>{{$cliente->nuip}}</th>
                                            <th>{{$cliente->nombreCli}}</th>
                                            <th>{{$cliente->estadoCli}}</th>
                                            <th>{{$cliente->tipoIdCli}}</th>
                                            <th>{{$cliente->telefonoCli}}</th>
                                            <th>{{$cliente->rangoCli}}</th>
                                            <th>
                                                
                                                <a href="{{route('clientes.show', $cliente->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                            
                                                <a href="{{route('clientes.edit', $cliente->id)}}"><i class="fas fa-pen"></i></a>
                                               
                                            </th>
                                            
                                        </tr>
                                        @endforeach
                                        
                                        
                                        
                                        
                                        
                                    </tbody>
                                    </div>
                                </div>
                                </table>
                                
                                </div>








@endsection
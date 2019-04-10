    
<?php
/*En esta página se reciben las variables enviadas desde ePayco hacia el servidor.
Antes de realizar cualquier movimiento en base de datos se deben comprobar algunos valores
Es muy importante comprobar la firma enviada desde ePayco
Ingresar  el valor de p_cust_id_cliente lo encuentras en la configuración de tu cuenta ePayco
Ingresar  el valor de p_key lo encuentras en la configuración de tu cuenta ePayco
*/
$p_cust_id_cliente = '25900';
$p_key             = 'bea40ca452d00045845fed33d24809b9274f196b';

use App\Clientes;
use App\Empresa;


?>

@extends('layouts.apphome')
@section('content')


<div class="col-m-9">

    <h1 align="center">Información de pagos</h1>
</div>
<div class="col-m-3">

    @include('pagos.fragment.info')

</div>

<div class="col-md-12">
    <div class="card">

    @role('cliente')

    <div style="text-align: center; padding: 4rem">
        <h3>PAGO MES {{ $mes }}</h3>

        @if($pago != null)
            <h4 style="padding: 2rem;">El pago del mes vigente ya ha sido realizado</h4>
        @endif
        @if($pago == null)
            <form>
                <script

                    src="https://checkout.epayco.co/checkout.js"
                    class="epayco-button"
                    x_cust_id_cliente="3"
                    data-epayco-key="6c9a18d57c132303c128ddf22f7e8e82"
                    data-epayco-amount={!! json_encode($usuario[0]->pago) !!}
                    data-epayco-name="Intersalud"
                    data-epayco-description="Pago servicios Intersalud"
                    data-epayco-currency="cop"
                    data-epayco-country="co"
                    data-epayco-test="false"
                    data-epayco-external="false"
                    data-epayco-response="http://localhost:8000/pago"
                    data-epayco-confirmation="http://localhost:8000/pago"

                >
                </script>
            </form>
        

        @endif
        
    </div>
    
    @endrole

    @role('administrador')

    <!--  -->
    <div class="col-md-12" style="background-color: #fff; padding: 4rem; width: 45%; margin: 2rem"   >
        <h3>Clientes activos (mes {{$mes}})</h3>
        <br>

        <div  class="table-responsive table-full-width">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cli_activo as $id) {
                            $cliente = Clientes::find($id); ?>
                            <tr>
                                <td>{{$cliente->nombres}} {{$cliente->apellidos}}</td>
                                <td>
                                    <a class="btn btn-primary" type="submit" style="float: right; width: 50%" href="{{route('clientes.edit', $cliente->id)}}">ver</a>
                                </td>
                            </tr>
                                
                        <?php } 
                        foreach ($emp_activo as $id) {
                            $empresa = Empresa::find($id); ?>
                            <tr>
                                <td>{{$empresa->nombre}}</td>
                                <td>
                                    <a class="btn btn-primary" type="submit" style="float: right; width: 50%" href="{{route('empresa.edit', $empresa->id)}}">ver</a>
                                </td>
                            </tr>
                            
                        <?php  } ?>
                </tbody>
                    
            </table>
        </div>
    </div>

    <div class="col-md-12" style="background-color: #fff; padding: 4rem; width: 45%; margin: 2rem"   >
        <h3>Clientes inactivos (mes {{$mes}})</h3>
        <br>
        <div  class="table-responsive table-full-width">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cli_inactivo as $id) { 
                            $cliente = Clientes::find($id); ?>
                            <tr>
                                <td>{{$cliente->nombres}} {{$cliente->apellidos}}</td>
                                <td>
                                    <a class="btn btn-primary" type="submit" style="float: right; width: 50%" href="{{route('clientes.update', $cliente->id)}}">ver</a>
                                </td>
                            </tr>
                                
                        <?php }
                            foreach ($emp_inactivo as $id) {
                            $empresa = Empresa::find($id); ?>
                            <tr>
                                <td>{{$empresa->nombre}}</td>
                                <td>
                                    <a class="btn btn-primary" type="submit" style="float: right; width: 50%" href="{{route('empresa.update', $empresa->id)}}">ver</a>
                                </td>
                            </tr>
                            
                        <?php  } ?>
                </tbody>
            </table>
        </div>
    </div>
    @endrole
    
    </div>
</div>

@endsection 
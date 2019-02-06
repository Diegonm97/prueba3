<div class="col-sm-12">
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('nuipPago','Numero de identificacion(*).')!!}
{!!Form::number('nuipPago',null,['class'=>'form-control','title'=>'Ingresa un numero de identificacion del pago, no registrado.','min'=>'5','placeholder'=>'Ej: 66.345.234','id'=>'nuipPago','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('nombrePago','Nombre del Cliente(*).')!!}
{!!Form::text('nombrePago',null,['class'=>'form-control','title'=>'Ingresa el nombre del cliente.' , 'placeholder'=>'Ej: Juan Perez','id'=>'nombrePago','required'=>'required' ])!!}
</div>
</div>

<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('oficinaPago','Oficina(*).')!!}
{!!Form::select('oficinaPago', ['Sede Principal'=>'Sede Principal', 'Sede Llanogrande 1'=>'Sede Llanogrande 1', 'Sede Llanogrande 2'=>'Sede Llanogrande 2' , 'Sede Cali'=>'Sede Cali', 'Sede Buga'=>'Sede Buga', 'Sede Rozo'=>'Sede Rozo'],null,['class'=>'form-control','title'=>'Ingresa la oficina donde se realiza el pago.' ,'id'=>'oficinaPago','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('telefonoPago','Telefono(*).')!!}
{!!Form::number('telefonoPago',null,['class'=>'form-control','title'=>'Ingresa el telefono de la Empresa.' , 'placeholder'=>'Ej: 3209523123','id'=>'telefonoPago','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('emailPago','Correo Electronico(*).')!!}
{!!Form::text('emailPago',null,['class'=>'form-control','title'=>'Ingresa el correo electronico.' , 'placeholder'=>'Ej: ejemplo@ejemplo.com ','id'=>'emailPago','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('salarioPago','Salario(*).')!!}
{!!Form::number('salarioPago',null,['class'=>'form-control','title'=>'Ingresa el salario.' , 'placeholder'=>'Ej: 680000','id'=>'salarioPago','required'=>'required', 'onkeyup'=>'calcular()' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('EPSpago','Eps(*).')!!}
{!!Form::number('EPSpago',null,['class'=>'form-control','title'=>'Ingresa el valor de la EPS.' , 'placeholder'=>'Ej: 13000','id'=>'EPSpago','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('AFPpago','AFP.')!!}
{!!Form::number('AFPpago',null,['class'=>'form-control','title'=>'Ingresa el valor de la AFP.' , 'placeholder'=>'Ej: 14000','id'=>'AFPpago'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('ARLpago','ARL.')!!}
{!!Form::number('ARLpago',null,['class'=>'form-control','title'=>'Ingresa el valor de la ARL.' , 'placeholder'=>'Ej: 15000','id'=>'ARLpago'])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('cajaCompPago','Caja de Compensacion.')!!}
{!!Form::text('cajaCompPago',null,['class'=>'form-control','title'=>'Ingresa el valor la caja de compensacion.' , 'placeholder'=>'Ej: 12000','id'=>'cajaCompPago'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('mesPago','Mes.')!!}
{!!Form::text('mesPago',null,['class'=>'form-control','title'=>'Ingresa el valor del mes.' , 'placeholder'=>'Ej: Enero','id'=>'mesPago'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('estadoClientePago','Estado Cliente(*).')!!}
{!!Form::select('estadoClientePago', ['Activo'=>'Activo', 'Retirado'=>'Retirado'],null,['class'=>'form-control','title'=>'Estado del cliente.', 'id'=>'estadoClientePago','required'=>'required' ])!!}
</div>
</div>

</div>

<div class="col-sm-12">
<div class="col-sm-2">
<div class="form-group row has-success">
{!! Form::label('sumaPago','Suma(*).')!!}
{!!Form::number('sumaPago',null,['class'=>'form-control','title'=>'Suma','placeholder'=>'Ej: 65234','id'=>'sumaPago','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('interesesPago','Intereses(*).')!!}
{!!Form::number('interesesPago',null,['class'=>'form-control','title'=>'Ingresa los intereses.','placeholder'=>'Ej: 12345','id'=>'interesesPago','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-1">
<div class="form-group row has-success">
{!! Form::label('sumTotalPago','Suma Total(*).')!!}
{!!Form::number('sumTotalPago',null,['class'=>'form-control','title'=>'Ingresa la suma total.','placeholder'=>'Ej: 12345','id'=>'sumTotalPago','required'=>'required'])!!}
</div>
</div>

<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('abonoPago','Abono Pago(*).')!!}
{!!Form::number('abonoPago',null,['class'=>'form-control','title'=>'Ingresa el abono del siguiente  pago., no registrado.','placeholder'=>'Ej: 12345','id'=>'abonoPago','required'=>'required'])!!}
</div>
</div>
</div>
<div class="col-sm-12">

<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('formaPago','Forma de pago(*).')!!}
{!!Form::select('formaPago', ['Efectivo'=>'Efectivo'],null,['class'=>'form-control','title'=>'Ingresa la forma de pago.', 'id'=>'formaPago','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('proximoPago','Fecha de Proximo pago(*).')!!}
{!!Form::date('proximoPago',null,['class'=>'form-control', 'title'=>'Elige la fecha del proximo pago', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('observacionPago','Observacion.')!!}
{!!Form::text('observacionPago',null,['class'=>'form-control','title'=>'Ingresa el valor del mes.' , 'placeholder'=>'Ej: Paga normalmente con 2 dias de retraso','id'=>'observacionPago'])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('informePago','Informe.')!!}
{!!Form::text('informePago',null,['class'=>'form-control','title'=>'Ingresar informe.' , 'placeholder'=>'Ej: Paga normalmente con 2 dias de retraso','id'=>'informePago'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('empresaContPago','Empresa cont. pago.')!!}
{!!Form::text('empresaContPago',null,['class'=>'form-control','title'=>'Nombre de la empresa contratante.' , 'placeholder'=>'Ej: Intesalud del Valle','id'=>'empresaContPago'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('costoAdminPago','Costo Administracion(*).')!!}
{!!Form::number('costoAdminPago',null,['class'=>'form-control','title'=>'Ingresa Costo de la administracion., no registrado.','placeholder'=>'Ej: 12345','id'=>'costoAdminPago','required'=>'required'])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('EMIpago','EMI(*).')!!}
{!!Form::number('EMIpago',null,['class'=>'form-control','title'=>'Costo EMI.','placeholder'=>'Ej: 12345','id'=>'EMIpago','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('descuentoPago','Descuento(*).')!!}
{!!Form::number('descuentoPago',null,['class'=>'form-control','title'=>'Descuento por Administracion.','placeholder'=>'Ej: 12345','id'=>'descuentoPago','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('UPCadicPago','UPC Adicional(*).')!!}
{!!Form::number('UPCadicPago',null,['class'=>'form-control','title'=>'Ingresa Costo del UPC.','placeholder'=>'Ej: 12345','id'=>'UPCadicPago','required'=>'required'])!!}
</div>
</div>

</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('sevFunePago','Servicios Funerarios(*).')!!}
{!!Form::number('sevFunePago',null,['class'=>'form-control','title'=>'Costo Servicios Funerarios.','placeholder'=>'Ej: 12345','id'=>'sevFunePago','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('inscripcionPago','Inscripcion(*).')!!}
{!!Form::number('inscripcionPago',null,['class'=>'form-control','title'=>'Costo inscripcion.','placeholder'=>'Ej: 12345','id'=>'inscripcionPago','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('activacionPago','Activacion(*).')!!}
{!!Form::number('activacionPago',null,['class'=>'form-control','title'=>'Ingresa Costo de la activacion.','placeholder'=>'Ej: 12345','id'=>'activacionPago','required'=>'required'])!!}
</div>
</div>

</div>
<div class="col-sm-12">
<div class="col-sm-12">
<div class="form-group row has-success">
{!! Form::label('aporteVoluPago','Aporte Voluncario(*).')!!}
{!!Form::number('aporteVoluPago',null,['class'=>'form-control','title'=>'Valor de aporte Voluncatio.','placeholder'=>'Ej: 12345','id'=>'aporteVoluPago','required'=>'required'])!!}
</div>
</div>


</div>


<br>
<br>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 

<script>

</script>
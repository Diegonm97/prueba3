<div class="col-sm-12">
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('tipoIdEmp','Tipo ID(*).')!!}
{!!Form::select('tipoIdEmp', ['Cc'=>'Cc', 'Pasaporte'=>'Pasaporte', 'Permiso de Trabajo'=>'Permiso de Trabajo'],null,['class'=>'form-control','title'=>'Ingresa el tipo de id del Empente.','id'=>'tipoIdEmp','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('nuip','Numero de cedula(*).')!!}
{!!Form::number('nuip',null,['class'=>'form-control','title'=>'Ingresa un numero de identificacion, no registrado.','min'=>'5','placeholder'=>'Ej: 66.345.234','id'=>'nuip','required'=>'required'])!!}
</div>
</div>

<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('nombreCli','Nombre del Cliente(*).')!!}
{!!Form::text('nombreCli',null,['class'=>'form-control','title'=>'Ingresa el nombre del Empente.' , 'placeholder'=>'Ej: Juan Perez','id'=>'nombreCli','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('estadoEmp','Estado del Empresa(*).')!!}
{!!Form::select('estadoEmp', ['Activo'=>'Activo', 'Retirado'=>'Retirado'],null,['class'=>'form-control','title'=>'Ingresa un estado del Empente.','title'=>'A,R','id'=>'estadoEmp','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('direccionEmp','Direccion(*).')!!}
{!!Form::text('direccionEmp',null,['class'=>'form-control','title'=>'Ingresa la direccion de la empresa.', 'placeholder'=>'Ej: Cra 10a #34-14','id'=>'direccionEmp','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('oficinaEmp','Oficina(*).')!!}
{!!Form::select('oficinaEmp', ['Sede Principal'=>'Sede Principal', 'Sede Llanogrande 1'=>'Sede Llanogrande 1', 'Sede Llanogrande 2'=>'Sede Llanogrande 2' , 'Sede Cali'=>'Sede Cali', 'Sede Buga'=>'Sede Buga', 'Sede Rozo'=>'Sede Rozo'],null,['class'=>'form-control','title'=>'Ingresa la oficina donde se afilio al Empente.' ,'id'=>'oficinaEmp','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('ciudadEmp','Ciudad(*).')!!}
{!!Form::text('ciudadEmp',null,['class'=>'form-control','title'=>'Ingresa la ciudad de la Empresa.' , 'placeholder'=>'Ej: Palmira','id'=>'ciudadEmp','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('telefonoEmp','Telefono(*).')!!}
{!!Form::number('telefonoEmp',null,['class'=>'form-control','title'=>'Ingresa el telefono de la Empresa.' , 'placeholder'=>'Ej: 3209523123','id'=>'telefonoEmp','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('emailEmp','Correo Electronico(*).')!!}
{!!Form::text('emailEmp',null,['class'=>'form-control','title'=>'Ingresa el correo electronico de la Empresa.' , 'placeholder'=>'Ej: ejemplo@ejemplo.com ','id'=>'emailEmp','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">



</div>

<div class="col-sm-12">



<div class="col-sm-4">
<div class="form-group row has-success">
{!! Form::label('fechaIngEmp','Fecha de Ingreso(*).')!!}
{!!Form::date('fechaIngEmp',null,['class'=>'form-control', 'title'=>'Elige un fecha de nacimiento', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
</div>
</div>
</div>
<div class="col-sm-12">
<div class="col-sm-2">
<div class="form-group row has-success">
{!! Form::label('tipoEmp','Tipo de Empresa(*).')!!}
{!!Form::select('tipoEmp', ['Empresa'=>'Empresa'], null,['class'=>'form-control','title'=>'Elige tu tipoEmp.', 'required'=>'required','name'=>'tipoEmp'])!!}
</div>
</div>
<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('idEmpresaContraEmp','Id de la empresa(*).')!!}
{!!Form::text('idEmpresaContraEmp',null,['class'=>'form-control','title'=>'Ingresa el id de la empresa del Empresa.' , 'placeholder'=>'Ej: 12345678','id'=>'idEmpresaContraEmp','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-1">
<div class="form-group row has-success">
{!! Form::label('idNIT','Id del Nit.')!!}
{!!Form::text('idNIT',null,['class'=>'form-control','title'=>'Ingresa el id del Nit.' , 'placeholder'=>'Ej: 1','id'=>'idNIT'])!!}
</div>
</div>

<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('nombreEmp','Nombre de la Empresa(*).')!!}
{!!Form::text('nombreEmp',null,['class'=>'form-control','title'=>'Ingresa el nombre de la empresa.' , 'placeholder'=>'Ej: La brasa roja','id'=>'nombreEmp','required'=>'required' ])!!}
</div>
</div>
</div>
<div class="col-sm-12">

<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('estadoPago','Estado de pago(*).')!!}
{!!Form::select('estadoPago', ['Pago'=>'Pago', 'No Pago'=>'No Pago'],null,['class'=>'form-control','title'=>'Ingresa un estado de pago del Emprensa.', 'id'=>'estadoPago','required'=>'required' ])!!}
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
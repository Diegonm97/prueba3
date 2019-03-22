<div class="col-sm-12">
	<div class="col-sm-3">
		<div class="form-group row has-success">
			{!! Form::label('tipo_id','Tipo ID(*).')!!}
			{!!Form::select('tipo_id', ['Cc'=>'Cc', 'Pasaporte'=>'Pasaporte', 'Permiso de Trabajo'=>'Permiso de Trabajo'],null,['class'=>'form-control','title'=>'Ingresa el tipo de id del cliente.','id'=>'tipo_id','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group row has-success">
			{!! Form::label('identificacion','Numero de cedula(*).')!!}
			{!!Form::number('identificacion',null,['class'=>'form-control','title'=>'Ingresa un numero de identificacion, no registrado.','min'=>'5','placeholder'=>'Ej: 66.345.234','id'=>'identificacion','required'=>'required'])!!}
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group row has-success">
		{!! Form::label('nombres','Nombre(s) del cliente(*).')!!}
		{!!Form::text('nombres',null,['class'=>'form-control','title'=>'Ingresa el nombre del cliente.' , 'placeholder'=>'Ej: Juan Rodrigo','id'=>'nombres','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group row has-success">
			{!! Form::label('apellidos','Apellido(s) del cliente(*).')!!}
			{!!Form::text('apellidos',null,['class'=>'form-control','title'=>'Ingresa el apellido del cliente.' , 'placeholder'=>'Ej: Perez Lopez','id'=>'apellidos','required'=>'required' ])!!}
		</div>
	</div>
</div>

<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('tipo_cliente','Seleccione tipo de clinte(*).')!!}
			{!!Form::select('tipo_cliente', [1=>'Independiente', 2=>'Asociado'],null,['class'=>'form-control','title'=>'Ingresa tipo de cliente.' ,'id'=>'tipo_cliente','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('estado','Estado del cliente(*).')!!}
			{!!Form::select('estado', ['Activo'=>'Activo', 'Retirado'=>'Retirado'],null,['class'=>'form-control','title'=>'Ingresa un estado del cliente.','title'=>'A,R','id'=>'estado','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('direccion','Direccion(*).')!!}
			{!!Form::text('direccion',null,['class'=>'form-control','title'=>'Ingresa la direccion del cliente.', 'placeholder'=>'Ej: Cra 10a #34-14','id'=>'direccion','required'=>'required' ])!!}
		</div>
	</div>
</div>

<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('id_ciudad','Ciudad(*).')!!}
			{!!Form::text('id_ciudad',null,['class'=>'form-control','title'=>'Ingresa la ciudad del cliente.' , 'placeholder'=>'Ej: Palmira','id'=>'id_ciudad','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('telefono','Telefono(*).')!!}
			{!!Form::number('telefono',null,['class'=>'form-control','title'=>'Ingresa el telefono del cliente.' , 'placeholder'=>'Ej: 3209523123','id'=>'telefono','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('email','Correo Electronico.')!!}
			{!!Form::text('email',null,['class'=>'form-control','title'=>'Ingresa el correo electronico del cliente.' , 'placeholder'=>'Ej: ejemplo@ejemplo.com ','id'=>'email','required'=>'required' ])!!}
		</div>
	</div>
</div>

<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
		{!! Form::label('fecha_nacimiento','Fecha de nacimiento(*).')!!}
		{!!Form::date('fecha_nacimiento',null,['class'=>'form-control', 'title'=>'Elige un fecha de nacimiento', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('salario','Salario(*).')!!}
			{!!Form::number('salario',null,['class'=>'form-control','title'=>'Ingresa el salario del cliente.' , 'placeholder'=>'Ej: 680000','id'=>'salario','required'=>'required', 'onkeyup'=>'calcular()' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('rango','Seleccione rango(*).')!!}
			{!!Form::select('rango', [1=>'1', 2=>'2', 3=>'3', 4=>'4'],null,['class'=>'form-control','title'=>'Ingresa rango del cliente.' ,'id'=>'rango','required'=>'required' ])!!}
		</div>
	</div>
</div>

<div class="col-sm-12">

	<div class="col-sm-3">
		<div class="form-group row has-success">
			{!! Form::label('id_eps','Valor por del Eps cliente(*).')!!}
			{!!Form::number('id_eps',null,['class'=>'form-control','title'=>'Ingresa la EPS  del cliente.' , 'placeholder'=>'Ej: 13000','id'=>'id_eps','required'=>'required' ])!!}
		</div>
	</div>

	<div class="col-sm-3">
		<div class="form-group row has-success">
			{!! Form::label('id_arl','Valor por del ARL del cliente.')!!}
			{!!Form::number('id_arl',null,['class'=>'form-control','title'=>'Ingresa la ARL del cliente.' , 'placeholder'=>'Ej: 15000','id'=>'id_arl'])!!}
		</div>
	</div>

	<div class="col-sm-3">
		<div class="form-group row has-success">
			{!! Form::label('id_afp','Valor por del AFP del cliente.')!!}
			{!!Form::number('id_afp',null,['class'=>'form-control','title'=>'Ingresa la AFP del cliente.' , 'placeholder'=>'Ej: 14000','id'=>'id_afp'])!!}
		</div>
	</div>

	<div class="col-sm-3">
		<div class="form-group row has-success">
			{!! Form::label('id_cjc','Valor por del Caja de Compensacion.')!!}
			{!!Form::text('id_cjc',null,['class'=>'form-control','title'=>'Ingresa la caja de compensacion del cliente.' , 'placeholder'=>'Ej: 12000','id'=>'id_cjc'])!!}
		</div>
	</div>
</div>


<div class="col-sm-12">
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('beneficio','Beneficio.')!!}
			{!!Form::select('beneficio', [1=>'No', 2 => 'Si'],null,['class'=>'form-control','title'=>'Ingresa un estado del cliente.' ,'id'=>'beneficio'])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('administracion','Administracion cliente.')!!}
			{!!Form::text('administracion',null,['class'=>'form-control','title'=>'Ingresa el nombre de la empresa.' , 'placeholder'=>'Ej: La brasa roja','id'=>'administracion','required'=>'required' ])!!}
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group row has-success">
			{!! Form::label('inscripcion','Inscripcion.')!!}
			{!!Form::text('inscripcion',null,['class'=>'form-control','title'=>'Ingresa el nombre de la empresa.' , 'placeholder'=>'Ej: La brasa roja','id'=>'inscripcion','required'=>'required' ])!!}
		</div>
	</div>
</div>


<div class="col-sm-12">
<div class="col-sm-5">
<div class="form-group row has-success">
{!! Form::label('upc','UPC del cliente.')!!}
{!!Form::text('upc',null,['class'=>'form-control','title'=>'Ingresa el UPC del cliente.' , 'placeholder'=>'Ej: 1','id'=>'upc' ])!!}
</div>
</div>
<div class="col-sm-5">
<div class="form-group row has-success">
{!! Form::label('fecha_ingreso','Fecha de Ingreso(*).')!!}
{!!Form::date('fecha_ingreso',null,['class'=>'form-control', 'title'=>'Elige un fecha de nacimiento', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
</div>
</div>
</div>

<br>
<br>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 

<script>
function calcular(){
	var porcentaje = "{{$porcentaje}}";
	var array = [10, 20, 30, 40, 50];
	var rango = $("#rangoCli").val();
	var salario = $("#salarioCli").val();
	salario = (salario == "") ? 0 : salario;
	eps(salario,porcentaje);
	arl(salario,array[rango-1]);
	afp(salario,porcentaje);
	cajacomp(salario,porcentaje);
	//console.log(salario);
}


function arl(salario,porcentaje){
	$("#ARLcli").val(salario*(porcentaje/10));
}
function eps(salario,porcentaje){
	$("#EPScli").val(salario*(porcentaje/20));
}
function afp(salario,porcentaje){
	$("#AFPcli").val(salario*(porcentaje/30));
}
function cajacomp(salario,porcentaje){
	$("#cajaCompCli").val(salario*(porcentaje/40));
}
</script>
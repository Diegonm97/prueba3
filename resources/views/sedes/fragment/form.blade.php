<div class="col-sm-12">

<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('nombre','Nombre de la sede(*).')!!}
{!!Form::text('nombre',null,['class'=>'form-control','title'=>'Ingresa el nombre de la sede.' , 'placeholder'=>'Ej: principal', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'nombre','required'=>'required' ])!!}
</div>
</div>

<div class="col-sm-3">
		<div class="form-group row has-success">
		{!! Form::label('id_ciudad','Nombre Ciudad(*).')!!}
			<select class="form-control" id="id_ciudad" required="required" name="id_ciudad">
				<option value=""></option>
				@foreach ($ciudades as $ciudad)

					<option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>

				@endforeach
			</select>
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
			{!! Form::label('direccion','Direccion(*).')!!}
			{!!Form::text('direccion',null,['class'=>'form-control','title'=>'Ingresa la direccion del cliente.', 'placeholder'=>'Ej: Cra 10a #34-14', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'direccion','required'=>'required' ])!!}
		</div>
	</div>

</div>
<br>
<br>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 


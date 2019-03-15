<div class="col-sm-12">
<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('name','Nombre del rol(*).')!!}
{!!Form::text('name',null,['class'=>'form-control','title'=>'Ingresa el nombre del rol','placeholder'=>'Ej: Admin','id'=>'name','required'=>'required'])!!}
</div>
</div>
<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('slug','Etiqueta(*).')!!}
{!!Form::text('slug',null,['class'=>'form-control','title'=>'Ingresa la etiqueta del rol','placeholder'=>'Ej: Administrador','id'=>'slug','required'=>'required'])!!}
</div>
</div>
</div>
<div class="col-sm-12">
	<div class="col-sm-12">
<div class="form-group row has-success">
{!! Form::label('description','Descripcion del rol(*).')!!}
{!!Form::textarea('description',null,['class'=>'form-control','title'=>'Ingresa la descripcion del rol','placeholder'=>'Ej: Persona administradora del sistema','id'=>'description','required'=>'required'])!!}
</div>
</div>
</div>
</div>
<div>
<hr>
<h3>Permiso especial</h3>
<div class="form-group">
 	<label>{{ Form::radio('special', 'all-access') }} Acceso total</label>
 	<label>{{ Form::radio('special', 'no-access') }} Ningún acceso (bloquear)</label>
	 <label>{{ Form::radio('special', '') }} Ningun permiso especial</label>
</div>
<hr>
<h3>Lista de permisos</h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)
	    <li>
	        <label>
	        {{ Form::checkbox('permissions[]', $permission->id, null) }}
	        {{ $permission->name }}
	        <em>({{ $permission->description ?: 'Sin Descripcion' }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
</div>


<br>
<br>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 

<script>

</script>
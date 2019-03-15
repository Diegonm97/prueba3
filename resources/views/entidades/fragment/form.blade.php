<div class="col-sm-12">

<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('nombre','Nombre del Cliente(*).')!!}
{!!Form::text('nombre',null,['class'=>'form-control','title'=>'Ingresa el nombre de la entidad.' , 'placeholder'=>'Ej: Confandi','id'=>'nombre','required'=>'required' ])!!}
</div>
</div>

<div class="col-sm-3">
<div class="form-group row has-success">
{!! Form::label('tipo','Tipo de la entidad(*).')!!}
{!!Form::select('tipo', ['EPS'=>'EPS', 'ARL'=>'ARL', 'AFP'=>'AFP', 'CajaComp'=>'CajaComp'],null,['class'=>'form-control','title'=>'Ingresa el tipo de la entidad.','id'=>'tipo','required'=>'required' ])!!}
</div>
</div>
<div class="col-sm-6">
<div class="form-group row has-success">
{!! Form::label('contacto','Contacto de la entidad(*).')!!}
{!!Form::text('contacto',null,['class'=>'form-control','title'=>'Ingresa el contacto de la entidad.' , 'placeholder'=>'Ej: 3101231234','id'=>'contacto','required'=>'required' ])!!}
</div>
</div>
</div>
<br>
<br>
<div class="form-group text-center">
{!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 


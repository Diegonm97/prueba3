<div class="col-sm-12">

    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('nombre','Nombre de la Entidad(*).')!!}
            {!!Form::text('nombre',null,['class'=>'form-control','title'=>'Ingresa el nombre de la entidad.' , 'placeholder'=>'Ej: Confandi', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'nombre','required'=>'required' ])!!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('tipo','Tipo de la entidad(*).')!!}
            {!!Form::select('tipo', [1=>'EPS', 2=>'ARL', 3=>'AFP', 4=>'CajaComp'],null,['class'=>'form-control','title'=>'Ingresa el tipo de la entidad.','id'=>'tipo','required'=>'required' ])!!}
        </div>
    </div>

</div>
<br>
<br>
<div class="form-group text-center">
    {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 
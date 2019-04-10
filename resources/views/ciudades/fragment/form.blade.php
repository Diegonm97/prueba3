<div class="col-sm-12">

    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('nombre','Nombre de la ciudad(*).')!!}
            {!!Form::text('nombre',null,['class'=>'form-control','title'=>'Ingresa el nombre de la ciudad.' , 'placeholder'=>'Ej: Confandi', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'nombre','required'=>'required' ])!!}
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('codigo','Código de la ciudad(*).')!!}
            {!!Form::number('codigo',null,['class'=>'form-control','title'=>'Ingresa el código de la ciudad.' , 'placeholder'=>'Ej: 123','id'=>'codigo','required'=>'required' ])!!}
        </div>
    </div>

</div>
<br>
<br>
<div class="form-group text-center">
    {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 
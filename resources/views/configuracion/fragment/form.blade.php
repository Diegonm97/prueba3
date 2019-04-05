<div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('nombre','Nombre(*).')!!}
            {!!Form::text('nombre',null,['class'=>'form-control','title'=>'Nombre' , 'placeholder'=>'Ej: Tarifa SENA','id'=>'nombre','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('codigo','Código(*).')!!}
            {!!Form::text('codigo',null,['class'=>'form-control','title'=>'Código' , 'placeholder'=>'Ej: SENA','id'=>'codigo','required'=>'required' ])!!}
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('valor','Valor (*).')!!}
            {!!Form::text('valor',null,['class'=>'form-control','title'=>'Valor' , 'placeholder'=>'Ej: 4.0','id'=>'valor','required'=>'required' ])!!}
        </div>
    </div>
</div>


<div class="form-group text-center">
    {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 
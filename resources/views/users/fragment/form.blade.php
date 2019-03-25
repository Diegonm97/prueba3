<div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('id','Id de la cuenta.')!!}
            {!!Form::number('id',null,['class'=>'form-control','title'=>'Id de la cuenta.','min'=>'1','placeholder'=>'Ej: 1','id'=>'id','required'=>'required'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('name','Nombre.')!!}
            {!!Form::text('name',null,['class'=>'form-control','title'=>'Nombre de la cuenta.' , 'placeholder'=>'Ej: Juan Perez','id'=>'name','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('email','Email.')!!}
            {!!Form::text('email',null,['class'=>'form-control','title'=>'Ingresa el email de la cuenta.' , 'placeholder'=>'Ej: JuanPerez@email.com','id'=>'email','required'=>'required' ])!!}
        </div>
    </div>
</div>

<div class="col-sm-12">
    <h3>Lista de roles</h3>
    <div class="form-group">
        <ul class="list-unstyled">
            @foreach($roles as $role)
            <li>
                <label>
                    {{ Form::checkbox('roles[]', $role->id,null) }}
                    {{ $role->name}}
                    <em> ({{ $role->description ?: 'N/A'}}) </em>
                </label>
            </li>
            @endforeach
        </ul>

    </div>
</div>
<div class="form-group text-center">
    {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div>

<script>

</script> 
<div class="col-sm-12">
    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('nit','Número de Nit(*).')!!}
            {!!Form::text('nit',null,['class'=>'form-control','title'=>'Ingresa un numero de nit no registrado.','min'=>'5','placeholder'=>'Ej: 66.345.234','id'=>'nuip','required'=>'required'])!!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group row has-success">
            {!! Form::label('nombre','Nombre de la empresa(*).')!!}
            {!!Form::text('nombre',null,['class'=>'form-control','title'=>'Ingresa el nombre de la Empresa.' , 'placeholder'=>'Ej: Intersalud Colombia', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'nombre','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('estado','Estado del Empresa(*).')!!}
            {!!Form::select('estado', [ 1=>'ACTIVO', 2=>'RETIRADO'],null,['class'=>'form-control','title'=>'Ingresa un estado del Empente.','title'=>'A,R','id'=>'estado','required'=>'required' ])!!}
        </div>
    </div>
</div>
<div class="col-sm-12">

    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('direccion','Dirección(*).')!!}
            {!!Form::text('direccion',null,['class'=>'form-control','title'=>'Ingresar dirección.' , 'placeholder'=>'Ej: Calle 2 # 30 - 20', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'direccion','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('id_ciudad','Ciudad(*).')!!}
            <select class="form-control" id="id_ciudad" required="required" name="id_ciudad">
                @if ($ciudad != null)
                <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                @endif
                <option value=""></option>
                @foreach ($ciudades as $ciudad)

                <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>

                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('nombre_contacto','Nombre contacto(*).')!!}
            {!!Form::text('nombre_contacto',null,['class'=>'form-control','title'=>'Ingresar nombre de contacto de la Empresa.', 'onKeyUp'=>'this.value = this.value.toUpperCase()' , 'placeholder'=>'Ej: Pepito Perez','id'=>'nombre_contacto','required'=>'required' ])!!}
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group row has-success">
        {!! Form::label('email','Email contacto(*).')!!}
            {!!Form::text('email',null,['class'=>'form-control','title'=>'Ingresar email del contacto de la Empresa.' , 'placeholder'=>'Ej: ejemplo@ejemplo.com ','id'=>'email','required'=>'required' ])!!}

        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('telefono_contacto','Telefono contacto(*).')!!}
            {!!Form::text('telefono_contacto',null,['class'=>'form-control','title'=>'Ingresar telefono del contacto de la Empresa.' , 'placeholder'=>'Ej: 3201782323 ','id'=>'telefono_contacto','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('beneficio','Beneficio.')!!}
            {!!Form::select('beneficio', [1=>'NO', 2 => 'SI'],null,['class'=>'form-control','title'=>'Ingresa un estado del cliente.' ,'id'=>'beneficio'])!!}
        </div>
    </div>
</div>

<div class="col-sm-12">

    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('administracion','Administración cliente.')!!}
            {!!Form::text('administracion',null,['class'=>'form-control','title'=>'Ingrese el costo por administracion.' , 'placeholder'=>'Ej: 20000','id'=>'administracion' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('inscripcion','Inscripción.')!!}
            {!!Form::text('inscripcion',null,['class'=>'form-control','title'=>'Ingrese el costo por inscripcion.' , 'placeholder'=>'Ej: 20000','id'=>'inscripcion' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('fecha_ingreso','Fecha de Ingreso(*).')!!}
            {!!Form::date('fecha_ingreso',null,['class'=>'form-control', 'title'=>'Elige un fecha de nacimiento', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="col-sm-12">
        <div class="form-group row has-success">
            {!! Form::label('observacion','observaciones(*).')!!}
            {!!Form::textarea('observacion',null,['class'=>'form-control', 'title'=>'observaciones sobre la empresa', 'placeholder'=>'Ej: observaciones sobre el cliente'])!!}
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
<div class="col-sm-12">
    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('tipo_id','Tipo ID(*).')!!}
            {!!Form::select('tipo_id', [1 =>'CC', 2 =>'PASAPORTE', 3 =>'PERMISO DE TRABAJO'],null,['class'=>'form-control','title'=>'Ingresa el tipo de id del cliente.','id'=>'tipo_id','required'=>'required' ])!!}
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
            {!!Form::text('nombres',null,['class'=>'form-control','title'=>'Ingresa el nombre del cliente.' , 'placeholder'=>'Ej: Juan Rodrigo', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'nombres','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('apellidos','Apellido(s) del cliente(*).')!!}
            {!!Form::text('apellidos',null,['class'=>'form-control','title'=>'Ingresa el apellido del cliente.' , 'placeholder'=>'Ej: Perez Lopez', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'apellidos','required'=>'required' ])!!}
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('tipo_cliente','Seleccione tipo de cliente(*).')!!}
            {!!Form::select('tipo_cliente', [1=>'INDEPENDIENTE', 2=>'ASOCIADO'],null,['class'=>'form-control','title'=>'Ingresa tipo de cliente.' ,'id'=>'tipo_cliente','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('estado','Estado del cliente(*).')!!}
            {!!Form::select('estado', [1=>'ACTIVO', 2=>'RETIRADO'],null,['class'=>'form-control','title'=>'Ingresa un estado del cliente.','title'=>'A,R','id'=>'estado','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('direccion','Direccion(*).')!!}
            {!!Form::text('direccion',null,['class'=>'form-control','title'=>'Ingresa la direccion del cliente.', 'placeholder'=>'Ej: Cra 10a #34-14', 'onKeyUp'=>'this.value = this.value.toUpperCase()','id'=>'direccion','required'=>'required' ])!!}
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('id_ciudad','Nombre Ciudad(*).')!!}
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
            {!!Form::select('rango', [1=>'1', 2=>'2', 3=>'3', 4=>'4', 5=>'5'],null,['class'=>'form-control','title'=>'Ingresa rango del cliente.' ,'id'=>'rango','required'=>'required' ])!!}
        </div>
    </div>
</div>

<div class="col-sm-12">
    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('id_eps','Nombre EPS(*).')!!}
            <select class="form-control" id="id_eps" required="required" name="id_eps">
                @if ($eps != null)
                <option value="{{$eps->id}}">{{$eps->nombre}}</option>
                @endif

                <option value=""></option>
                @foreach ($epss as $eps)

                <option value="{{$eps->id}}">{{$eps->nombre}}</option>

                @endforeach
            </select>
        </div>
    </div>




    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('id_arl','Nombre ARL(*).')!!}
            <select class="form-control" id="id_arl" name="id_arl">
                @if ($arl != null)
                <option value="{{$arl->id}}">{{$arl->nombre}}</option>
                @endif

                <option value=""></option>
                @foreach ($arls as $arl)

                <option value="{{$arl->id}}">{{$arl->nombre}}</option>

                @endforeach
            </select>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('id_afp','Nombre AFP(*).')!!}
            <select class="form-control" id="id_afp" name="id_afp">
                @if ($afp != null)
                <option value="{{$afp->id}}">{{$afp->nombre}}</option>
                @endif

                <option value=""></option>
                @foreach ($afps as $afp)

                <option value="{{$afp->id}}">{{$afp->nombre}}</option>

                @endforeach
            </select>
        </div>
    </div>


    <div class="col-sm-3">
        <div class="form-group row has-success">
            {!! Form::label('id_cjc','Nombre Caja de Compensacion(*).')!!}
            <select class="form-control" id="id_cjc" name="id_cjc">
                @if ($cajacomp != null)
                <option value="{{$cajacomp->id}}">{{$cajacomp->nombre}}</option>
                @endif

                <option value=""></option>
                @foreach ($cajacomps as $cajacomp)

                <option value="{{$cajacomp->id}}">{{$cajacomp->nombre}}</option>

                @endforeach
            </select>
        </div>
    </div>


</div>


<div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('beneficio','Beneficio.')!!}
            {!!Form::select('beneficio', [1=>'NO', 2 => 'SI'],null,['class'=>'form-control','title'=>'Beneficio del cliente.' ,'id'=>'beneficio'])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('administracion','Administracion cliente.')!!}
            {!!Form::text('administracion',null,['class'=>'form-control','title'=>'Ingresa el costo por administracion.' , 'placeholder'=>'Ej: 20000','id'=>'administracion','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('inscripcion','Inscripcion.')!!}
            {!!Form::text('inscripcion',null,['class'=>'form-control','title'=>'Ingresa el costo por inscripcion.' , 'placeholder'=>'Ej: 20000','id'=>'inscripcion','required'=>'required' ])!!}
        </div>
    </div>
</div>


<div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('upc','UPC del cliente.')!!}
            {!!Form::text('upc',null,['class'=>'form-control','title'=>'Ingresa el UPC del cliente.' , 'placeholder'=>'Ej: 1','id'=>'upc' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('fecha_ingreso','Fecha de Ingreso(*).')!!}
            {!!Form::date('fecha_ingreso',null,['class'=>'form-control', 'title'=>'Elige un fecha de ingreso', 'placeholder'=>'Ej: 23/10/1997','required'=>'required'])!!}
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="col-sm-12">
        <div class="form-group row has-success">
            {!! Form::label('observacion','Observacion.')!!}
            {!!Form::textarea('observacion',null,['class'=>'form-control', 'title'=>'Ingresa una observacion', 'placeholder'=>'Ej: Llamar el dia 5 de junio'])!!}
        </div>
    </div>
</div>

<br>
<br>
<div class="form-group text-center">
    {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div>

<script>
    function calcular() {
        var porcentaje = "{{$porcentaje}}";
        var array = [10, 20, 30, 40, 50];
        var rango = $("#rangoCli").val();
        var salario = $("#salarioCli").val();
        salario = (salario == "") ? 0 : salario;
        eps(salario, porcentaje);
        arl(salario, array[rango - 1]);
        afp(salario, porcentaje);
        cajacomp(salario, porcentaje);
        //console.log(salario);
    }


    function arl(salario, porcentaje) {
        $("#ARLcli").val(salario * (porcentaje / 10));
    }

    function eps(salario, porcentaje) {
        $("#EPScli").val(salario * (porcentaje / 20));
    }

    function afp(salario, porcentaje) {
        $("#AFPcli").val(salario * (porcentaje / 30));
    }

    function cajacomp(salario, porcentaje) {
        $("#cajaCompCli").val(salario * (porcentaje / 40));
    }
</script> 
<div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('nombre_completo','Nombre Completo(*).')!!}
            {!!Form::text('nombre_completo',null,['class'=>'form-control','title'=>'Nombre' , 'placeholder'=>'Ej: Camilo Arce','id'=>'nombre_completo','required'=>'required' ])!!}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('email','Email(*).')!!}
            {!!Form::text('email',null,['class'=>'form-control','title'=>'Email' , 'placeholder'=>'Ej: camilo.arce@intersalud.com','id'=>'email','required'=>'required' ])!!}
        </div>
    </div>

    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('estado','Estado del cliente(*).')!!}
            {!!Form::select('estado', [0=> '-- Seleccione -- ', 1=>'ACTIVO', 2=>'INAACTIVO'],null,['class'=>'form-control','title'=>'Ingresa un estado del empleado.','title'=>'A,I','id'=>'estado','required'=>'required' ])!!}
        </div>
    </div>
</div>

 <div class="col-sm-12">
    <div class="col-sm-4">
        <div class="form-group row has-success">
            {!! Form::label('id_sede','Nombre de la sede(*).')!!}
            <select class="form-control" id="id_sede" required="required" name="id_sede">
                @if ($sede != null)
                <option value="{{$sede->id}}">{{$sede->nombre}}</option>
                @endif

                <option value="">-- Seleccione --</option>
                @foreach ($sedes as $sed)

                <option value="{{$sed->id}}">{{$sed->nombre}}</option>

                @endforeach
            </select>
        </div>
    </div>
</div>


<div class="form-group text-center">
    {!!Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i>', array('type' => 'submit', 'class'=>'btn btn-primary btn-lg btn-block'))!!}
</div> 
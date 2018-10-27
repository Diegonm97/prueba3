@extends('layouts.apphome')
@section('content')


<p>
    
    <h1 align="center">Informacion Clientes</h1>
</p>

 <p>{{$cliente -> nombreCli}}
                        {{$cliente->estadoCli}}
                                    {{$cliente->tipoIdCli}}
                                    {{$cliente->direccionCli}}
                                    {{$cliente->oficinaCli}}
                                    {{$cliente->ciudadCli}}
</p>


                    </div>




@endsection
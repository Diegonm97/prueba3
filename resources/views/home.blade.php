@extends('layouts.apphome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                <div class="card-body" style="text-align: center;">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4 > Bienvenido a <b style="color: #3472F7">Intersalud del Valle</b></h4> </div>

                    
            </div>
        </div>

    </div>

    @role('administrador')
    <div class="row">
        <div class="col-md-1"></div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption" style="text-align: center">
            <h3>Ingresos mes {{$mes}}</h3>
            <h3> ${{number_format($total,0,',','.')}}</h3>
            <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a></p> -->
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption" style="text-align: center">
            <h3>Ingresos del día ({{$dia}}/{{$mes}})</h3>
            <h3> ${{number_format($totald,0,',','.')}}</h3>
            <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a></p> -->
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    @endrole
</div>
@endsection 
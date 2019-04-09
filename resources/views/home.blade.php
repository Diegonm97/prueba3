<?php 
use App\Sede;
?>
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

    <div style="text-align: center; width: 90%">

    <div class="row" style="background-color: #eee; margin-bottom: 2rem" >
      <h2 style="color: #3472F7">Ingresos Intersalud Colombia</h2>
        <div class="col-md-2"></div>
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

    
    <div class="row" style="background-color: #eee; margin-top: 2rem" >
      <h2 style="color: #3472F7">Ingresos por sede mes: {{$mes}}</h2>
      @foreach($sedes as $sede)
      <div class="col-sm-3 col-md-3">
        <div class="thumbnail">
          <div class="caption" style="text-align: center">
            <?php $sed = Sede::Search()->where('id' , '=', $sede->sede)->first();?>
            <h3>{{$sed->nombre}}</h3>
            <h3> ${{number_format($sede->total_sede,0,',','.')}}</h3>
            <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a></p> -->
          </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>
    @endrole

    @role('empleado')
      <div style="text-align: center; width: 90%">
    <?php $sede = Sede::Search()->where('id' , '=', $sedes[0]->id_sede)->first();  ?>

    <div class="row" style="background-color: #eee; margin-bottom: 2rem" >
      <h2 style="color: #3472F7">Ingresos Intersalud Colombia sede {{$sede->nombre}}</h2>
        <div class="col-md-2"></div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption" style="text-align: center">
            <h3>Ingresos mes {{$mes}}</h3>
            <h3> ${{number_format($totalmes,0,',','.')}}</h3>
            <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a></p> -->
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <div class="caption" style="text-align: center">
            <h3>Ingresos del día ({{$dia}}/{{$mes}})</h3>
            <h3> ${{number_format($totaldia,0,',','.')}}</h3>
            <!-- <p><a href="#" class="btn btn-primary" role="button">Button</a></p> -->
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
    @endrole
</div>
@endsection 
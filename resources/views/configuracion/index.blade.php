@extends('layouts.apphome')
@section('content')

<div class="col-sm-1">
      <a href="javascript:history.back()"><i class="fas fa-arrow-alt-circle-left fa-3x" style="color: #2C7CE1"></i></a>
</div>
  @can('Configuracion.edit')                                 
      <a href="{{route('configuracion.edit', $configuracion->id)}}">
      <i class="fas fa-pen fa-3x" style="color: #2C7CE1"></i></a>
       @endcan

<div class="col-sm-8" >
    
    <h1 align="center">Configuracion</h1>
</div>
<div class="col-sm-3">
      
      @include('configuracion.fragment.error')

</div>
    

<div class="col-md-12">
                        
    <div class="table-responsive table-full-width">
    <table class="table table-hover table-striped">
        <div class="container">
            <div class="row">
        <tbody>
            <tr>
            <td><strong>EPS: </strong></td>
            <td>{{$configuracion->tarifaEPS}}</td>
            </tr>
        
            <tr>
            <td><strong>RANGO 1:</strong></td>
            <td>  {{$configuracion->tarifaARLr1}}  </td>
            </tr>

            <tr>
            <td><strong>RANGO 2:</strong></td>
            <td>  {{$configuracion->tarifaARLr2}}  </td>
            </tr>

            <tr>
            <td><strong>RANGO 3:</strong></td>
            <td>  {{$configuracion->tarifaARLr3}}  </td>
            </tr>

            <tr>
            <td><strong>RANGO 4:</strong></td>
            <td>  {{$configuracion->tarifaARLr4}}  </td>
            </tr>

            <tr>
            <td><strong>RANGO 5:</strong></td>
            <td>  {{$configuracion->tarifaARLr5}}  </td>
            </tr>

            <tr>
            <td><strong>AFP:</strong></td>
            <td>  {{$configuracion->tarifaAFP}}  </td>
            </tr>

            <tr>
            <td><strong>Caja de compensacion</strong></td>
            <td>  {{$configuracion->cajaComp}}  </td>
            </tr>

            <tr>
            <td><strong>CCF autoliquidacion</strong></td>
            <td>  {{$configuracion->CCFautoliquidacion}}  </td>
            </tr>

            <tr>
            <td><strong>Sena</strong></td>
            <td>  {{$configuracion->tarifaSena}}  </td>
            </tr>

            <tr>
            <td><strong>ICBF</strong></td>
            <td>  {{$configuracion->tarifaICBF}}  </td>
            </tr>

            <tr>
            <td><strong>EPS Ley 1607</strong></td>
            <td>  {{$configuracion->tarifaEPS1607}}  </td>
            </tr>

            <tr>
            <td><strong>Caja de compensacion 1607</strong></td>
            <td>  {{$configuracion->tarifaCAJA1607}}  </td>
            </tr>

            <tr>
            <td><strong>EPS Colombiano en el exterior</strong></td>
            <td>  {{$configuracion->tarifaEPScolExt}}  </td>
            </tr>

            <tr>
            <td><strong>IVA</strong></td>
            <td>  {{$configuracion->IVA}}  </td>
            </tr>

            <tr>
            <td><strong>Salario minimo</strong></td>
            <td>  {{$configuracion->salarioMinimo}}  </td>
            </tr>

            <tr>
            <td><strong>Administración</strong></td>
            <td>  {{$configuracion->Administracion}}  </td>
            </tr>

            <tr>
            <td><strong>Administración independientes</strong></td>
            <td>  {{$configuracion->AdminIndepen}}  </td>
            </tr>

            <tr>
            <td><strong>Inscripción</strong></td>
            <td>  {{$configuracion->Inscripcion}}  </td>
            </tr>

            <tr>
            <td><strong>Activación</strong></td>
            <td>  {{$configuracion->Activacion}}</td>
            </tr>

            <tr>
            <td><strong>Dias habiles</strong></td>
            <td>  {{$configuracion->DiasHabiles}}  </td>
            </tr>

            <tr>
            <td><strong>Vencimiento independiente</strong></td>
            <td>  {{$configuracion->IndepVencimiento}}  </td>
            </tr>

            <tr>
            <td><strong>Intereses de mora</strong></td>
            <td>  {{$configuracion->Intereses}}  </td>
            </tr>

            
            

            

            
        </tbody>
        </div>
    </div>
</table>
</div>
</div>






@endsection
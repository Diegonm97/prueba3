<?php

namespace App\Http\Controllers;

use App\Configuracion;
use Illuminate\Http\Request;
use App\Http\Requests\ConfiguracionRequest;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $configuracion = Configuracion::find('1');
        

        return view('configuracion.index', compact('configuracion'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('configuracion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(configuracionRequest $request)
    {
        $configuracion = new configuracion;

            $configuracion->tarifaEPS  = $request->tarifaEPS;
            $configuracion->tarifaARLr1  = $request->tarifaARLr1;
            $configuracion->tarifaARLr2  = $request->tarifaARLr2;
            $configuracion->tarifaARLr3  = $request->tarifaARLr3;
            $configuracion->tarifaARLr4  = $request->tarifaARLr4;
            $configuracion->tarifaARLr5  = $request->tarifaARLr5;
            $configuracion->tarifaAFP    = $request->tarifaAFP;
            $configuracion->cajaComp     = $request->cajaComp;
            $configuracion->CCFautoliquidacion =$request->CCFautoliquidacion;
            $configuracion->tarifaSena  = $request->tarifaSena;
            $configuracion->tarifaICBF  = $request->tarifaICBF;
            $configuracion->tarifaEPS1607    = $request->tarifaEPS1607; 
            $configuracion->tarifaCAJA1607   = $request->tarifaCAJA1607;
            $configuracion->tarifaEPScolExt  = $request->tarifaEPScolExt;
            $configuracion->IVA              =$request->IVA;
            $configuracion->salarioMinimo    =$request->salarioMinimo;
            $configuracion->Administracion   =$request->Administracion;
            $configuracion->AdminIndepen     =$request->AdminIndepen;
            $configuracion->Inscripcion   =$request->Inscripcion;
            $configuracion->Activacion   =$request->Activacion;
            $configuracion->DiasHabiles      =$request->DiasHabiles;
            $configuracion->IndepVencimiento =$request->IndepVencimiento;
            
            $configuracion->save();

            return redirect()->route('configuracion.index');
            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $configuracion = Configuracion::find($id);
        return view('configuracion.show', compact('configuracion'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $configuracion =Configuracion::find($id);
        return view('configuracion.edit', compact('configuracion'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function update(ConfiguracionRequest $request, $id)
    {
        $configuracion = Configuracion::find($id);

            $configuracion->tarifaEPS  = $request->tarifaEPS;
            $configuracion->tarifaARLr1  = $request->tarifaARLr1;
            $configuracion->tarifaARLr2  = $request->tarifaARLr2;
            $configuracion->tarifaARLr3  = $request->tarifaARLr3;
            $configuracion->tarifaARLr4  = $request->tarifaARLr4;
            $configuracion->tarifaARLr5  = $request->tarifaARLr5;
            $configuracion->tarifaAFP    = $request->tarifaAFP;
            $configuracion->cajaComp     = $request->cajaComp;
            $configuracion->CCFautoliquidacion = $request->CCFautoliquidacion;
            $configuracion->tarifaSena  = $request->tarifaSena;
            $configuracion->tarifaICBF  = $request->tarifaICBF;
            $configuracion->tarifaEPS1607    = $request->tarifaEPS1607; 
            $configuracion->tarifaCAJA1607   = $request->tarifaCAJA1607;
            $configuracion->tarifaEPScolExt  = $request->tarifaEPScolExt;
            $configuracion->IVA              =$request->IVA;
            $configuracion->salarioMinimo    =$request->salarioMinimo;
            $configuracion->Administracion   =$request->Administracion;
            $configuracion->AdminIndepen     =$request->AdminIndepen;
            $configuracion->Inscripcion      =$request->Inscripcion;
            $configuracion->Activacion       =$request->Activacion;
            $configuracion->DiasHabiles      =$request->DiasHabiles;
            $configuracion->IndepVencimiento =$request->IndepVencimiento;
            $configuracion->Intereses        =$request->Intereses;
            
            $configuracion->save();

            return redirect()->route('configuracion.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Configuracion $configuracion)
    {
        //
    }
}

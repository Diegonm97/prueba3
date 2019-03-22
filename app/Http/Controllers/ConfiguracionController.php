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

        $configuracion = Configuracion::paginate();
        

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

            $configuracion->nombre  = $request->nombre;
            $configuracion->codigo  = $request->codigo;
            $configuracion->valor  = $request->valor;
            
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

            $configuracion->nombre  = $request->nombre;
            $configuracion->codigo  = $request->codigo;
            $configuracion->valor  = $request->valor;
            
            $configuracion->save();

            return redirect()->route('configuracion.index')->with('info','La configuracion fue actualizado');
        
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

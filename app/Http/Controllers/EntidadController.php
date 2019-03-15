<?php

namespace App\Http\Controllers;

use App\Entidad;
use Illuminate\Http\Request;
use App\Http\Requests\EntidadRequest;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $entidades = Entidad::search1($request->nombre)->orderbydesc('nombre')->paginate('8');

        return view('entidades.index', compact('entidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('entidades.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntidadRequest $request)
    {
        $entidad = new Entidad;

            $entidad->nombre         = $request->nombre;
            $entidad->tipo           = $request->tipo;
            $entidad->contacto       = $request->contacto;
            

            $entidad->save();

            return redirect()->route('entidad.index')
            ->with('info','La entidad fue creada');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entidades = Entidad::find($id);
        return view('entidades.show', compact('entidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $entidades = Entidad::find($id);

        return view('entidades.edit', compact('entidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function update(entidadRequest $request, $id)
    {
            $entidad = Entidad::find($id);

            $entidad->nombre         = $request->nombre;
            $entidad->tipo           = $request->tipo;
            $entidad->contacto       = $request->contacto;
            
            $entidad->save();

            return redirect()->route('entidad.index')->with('info','La entidad fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(entidad $entidad)
    {
        //
    }
}

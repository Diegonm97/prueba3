<?php

namespace App\Http\Controllers;

use App\Sede;
use App\Ciudad;
use Illuminate\Http\Request;

class SedeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sedes = Sede::search1($request->nombre)->orderbydesc('nombre')->paginate('8');

        return view('sedes.index', compact('sedes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = Ciudad::Search()->get();
        
        return view('sedes.create',compact('ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sede = new Sede;

            $sede->nombre         = $request->nombre;
            $sede->id_ciudad      = $request->id_ciudad;
            $sede->telefono       = $request->telefono;
            $sede->direccion      = $request->direccion;            

            $sede->save();

            return redirect()->route('sede.index')
            ->with('info','La sede fue creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sede = Sede::find($id);
        return view('sedes.show', compact('sede'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sede::find($id);
        $ciudades = Ciudad::Search()->get();

        return view('sedes.edit', compact('sede','ciudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $sede = Sede::find($id);

        $sede->nombre         = $request->nombre;
        $sede->id_ciudad      = $request->id_ciudad;
        $sede->telefono       = $request->telefono;
        $sede->direccion      = $request->direccion;            

        $sede->save();

        return redirect()->route('sedes.index')
        ->with('info','La sede fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sede $sede)
    {
        //
    }
}

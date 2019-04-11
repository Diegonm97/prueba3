<?php

namespace App\Http\Controllers;

use App\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $ciudades = Ciudad::search1($request->nombre)->orderby('nombre')->paginate('8');    //Realiza la busqueda por nombre

        return view('ciudades.index', compact('ciudades')); //retorna a la vista index de ciudades junto con la variable ciudades
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciudades.create');         //Retorna a la vista create de ciudades
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ciudad = new Ciudad;           //Crea un objeto de tipo ciudad

        $ciudad->nombre         = $request->nombre;
        $ciudad->codigo           = $request->codigo;


        $ciudad->save();                //Almacena los datos del objeto ciudad

        return redirect()->route('ciudad.index')        //Redirecciona a la vista index de ciudades
            ->with('info', 'La ciudad fue creada');     //Envia un mensaje de tipo info
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ciudades = Ciudad::find($id);              //Busca en la base de datos una ciudad con el id especificado
        return view('ciudades.show', compact('ciudades'));  //Retorna a la vista show de ciudades con el junto con la variable ciudades
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ciudades = Ciudad::find($id);              //Busca en la base de datos una ciudad con el id especificado

        return view('ciudades.edit', compact('ciudades'));//Retorna a la vista edit de ciudades con el junto con la variable ciudades
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ciudad = Ciudad::find($id);                //Busca en la base de datos una ciudad con el id especificado

        $ciudad->nombre         = $request->nombre;
        $ciudad->codigo           = $request->codigo;

        $ciudad->save();                            //Almacena los nuevos datos del objeto ciudad

        return redirect()->route('ciudad.index')    //Redirecciona a la vista index de ciudades
        ->with('info', 'La ciudad fue actualizado');//Envia un mensaje de tipo info
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ciudad::destroy($id);
        return redirect()->route('ciudad.index')->with('info', 'La ciudad fue eliminada');
    }
}

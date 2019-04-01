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
        $entidades = Entidad::search1($request->nombre)->orderbydesc('nombre')->paginate('8');      //Realiza la busqueda por nombre

        return view('entidades.index', compact('entidades'));   //Retorna a la vista index de entidades con la variable entidades
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('entidades.create');                //Retorna a la vista create de entidades
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntidadRequest $request)
    {
        $entidad = new Entidad;                         //Crea un objeto de tipo entidad

        $entidad->nombre         = $request->nombre;
        $entidad->tipo           = $request->tipo;


        $entidad->save();                               //Almacena los datos del objeto

        return redirect()->route('entidad.index')       //Retorna a la vista index de entidad
            ->with('info', 'La entidad fue creada');    //Envia un mensaje de tipo info
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entidades = Entidad::find($id);                //Busca en la base de datos una entidad con el id especificado
        return view('entidades.show', compact('entidades'));    //Retorna a la vista show con la variable entidades
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entidad  $entidad
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $entidades = Entidad::find($id);                //Busca en la base de datos una entidad con el id especificado

        return view('entidades.edit', compact('entidades'));    //Retorna a la vista show con la variable entidades
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
        $entidad = Entidad::find($id);                  //Busca en la base de datos una entidad con el id especificado

        $entidad->nombre         = $request->nombre;
        $entidad->tipo           = $request->tipo;

        $entidad->save();                               //Almacena los nuevos datos del objeto entidad

        return redirect()->route('entidad.index')->with('info', 'La entidad fue actualizado');
        //Retorna a la vista index de entidad con un mensaje de tipo info
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

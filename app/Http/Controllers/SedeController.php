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
        $sedes = Sede::search1($request->nombre)->orderby('nombre')->paginate('8'); //Realiza la busqueda por nombre
        $ciudades = Ciudad::Search()->get();        //Realiza la busqueda de todas las ciudades

        return view('sedes.index', compact('sedes', 'ciudades'));   //Retorna a la vista index de sedes con las variables sedes y ciudades
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ciudades = Ciudad::Search()->get();            //Realiza la busqueda de todas las ciudades
        $ciudad = null;
        return view('sedes.create', compact('ciudades', 'ciudad')); //Retorna a la vista create de sedes con las variables de ciudades y entidad
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sede = new Sede;                               //Crea un nuevo objeto de tipo sede

        $sede->nombre         = $request->nombre;
        $sede->id_ciudad      = $request->id_ciudad;
        $sede->telefono       = $request->telefono;
        $sede->direccion      = $request->direccion;

        $sede->save();                                  //Almacena los datos en el objeto sede

        return redirect()->route('sede.index')          //Retorna a la vista index 
            ->with('info', 'La sede fue creada');       //Envia un mensaje de tipo info
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sede = Sede::find($id);                        //Busca en la base de datos una sede con el id especificado
        return view('sedes.show', compact('sede'));     //Retorna a la vista show de sedes con la variable sede
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sede = Sede::find($id);                        //Busca en la base de datos una sede con el id especificado
        $ciudades = Ciudad::Search()->get();            //Busca todas las ciudades
        $ciudad = Ciudad::Search()->where('id', '=', $sede->id_ciudad)->first(); //Busca ciudades cullo id sea igual al id_ciudadde la sede

        return view('sedes.edit', compact('sede', 'ciudades', 'ciudad')); //Retorna a la vista edit de sedes con las variables sede, ciudades y ciudad
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sede = Sede::find($id);                    //Busca en la base de datos una sede con el id especificado

        $sede->nombre         = $request->nombre;
        $sede->id_ciudad      = $request->id_ciudad;
        $sede->telefono       = $request->telefono;
        $sede->direccion      = $request->direccion;

        $sede->save();                              //Almacena los datos en el objeto sede

        return redirect()->route('sede.index')      //Retorna a la vista index de sede
            ->with('info', 'La sede fue actualizado'); //Envia un mensaje de tipo info
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sede  $sede
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Sede::destroy($id);
        return redirect()->route('sedes.index')->with('danger', 'La sede fue eliminado');
    }
}

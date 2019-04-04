<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Entidad;
use App\Ciudad;
use Illuminate\Http\Request;
use App\Http\Requests\ClientesRequest;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Clientes::search1($request->identificacion)->orderbydesc('id')->paginate('8'); //Realiza la busqueda por identificacion

        return view('clientes.index', compact('clientes')); //Retorna a la vista index de clientes junto con la variable clientes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $epss = Entidad::Search()->where('tipo', '=', "1")->get();  //Realiza la busqueda de entidades que tengan tipo = 1
        $arls = Entidad::Search()->where('tipo', '=', "2")->get();  //Realiza la busqueda de entidades que tengan tipo = 2
        $afps = Entidad::Search()->where('tipo', '=', "3")->get();  //Realiza la busqueda de entidades que tengan tipo = 3
        $cajacomps = Entidad::Search()->where('tipo', '=', "4")->get();  //Realiza la busqueda de entidades que tengan tipo = 4
        $ciudades = Ciudad::Search()->get(); //Realiza la busqueda de todas las ciudades
        $ciudad = null;
        $eps = null;
        $arl = null;
        $afp = null;
        $cajacomp = null;
        $porcentaje = 10;
        return view('clientes.create', compact('porcentaje', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp', 'epss', 'arls', 'afps', 'cajacomps', 'ciudades'));
        //Retorna a al vista edit de clientes con las variables de porcentaje, cliente, clientes, ciudades, ciudad, epss, arls, afps, cajacomps, eps, arl, afp y cajacomp
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {
        $clientes = new Clientes;             //Crea un objeto de tipo clientes


        $clientes->identificacion   = $request->identificacion;
        $clientes->tipo_id          = $request->tipo_id;
        $clientes->nombres          = $request->nombres;
        $clientes->apellidos        = $request->apellidos;
        $clientes->estado           = $request->estado;
        $clientes->telefono         = $request->telefono;
        $clientes->direccion        = $request->direccion;
        $clientes->email            = $request->email;
        $clientes->tipo_cliente     = $request->tipo_cliente;
        $clientes->fecha_ingreso    = $request->fecha_ingreso;
        $clientes->fecha_nacimiento = $request->fecha_nacimiento;
        $clientes->salario          = $request->salario;
        $clientes->id_ciudad        = $request->id_ciudad;
        $clientes->id_eps           = $request->id_eps;
        $clientes->id_arl           = $request->id_arl;
        $clientes->id_afp           = $request->id_afp;
        $clientes->id_cjc           = $request->id_cjc;
        $clientes->beneficio        = $request->beneficio;
        $clientes->rango            = $request->rango;
        $clientes->upc              = $request->upc;
        $clientes->inscripcion       = $request->inscripcion;
        $clientes->administracion   = $request->administracion;
        $clientes->observacion   = $request->observacion;
        $clientes->id_usuario      = $request->id_usuario;

        $clientes->save();              //Almacena los datos del objeto clientes

        return redirect()->route('clientes.index')      //Redirecciona a la vista index de clientes
            ->with('info', 'El cliente fue creado');    //Envia un mensaje de tipo info
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Clientes::find($id);                                             //Busca en la base de datos un cliente con el id especificado
        $ciudad = Ciudad::Search()->where('id', '=', $cliente->id_ciudad)->first(); //Realiza la busqueda de ciudades que tengan id = al id de la ciudad que se retorna al buscar
        $eps = Entidad::Search()->where('id', '=', $cliente->id_eps)->first();      //Realiza la busqueda de ciudades que tengan id = al id de la eps que se retorna al buscar
        $arl = Entidad::Search()->where('id', '=', $cliente->id_arl)->first();      //Realiza la busqueda de ciudades que tengan id = al id de la arl que se retorna al buscar
        $afp = Entidad::Search()->where('id', '=', $cliente->id_afp)->first();      //Realiza la busqueda de ciudades que tengan id = al id de la afp que se retorna al buscar
        $cajacomp = Entidad::Search()->where('id', '=', $cliente->id_cjc)->first(); //Realiza la busqueda de ciudades que tengan id = al id de la cjc que se retorna al buscar
        return view('clientes.show', compact('cliente', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp')); //Retorna a al vista show de clientes con las variables de clientes, ciudad, eps, arl, afp y cajacomp
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $porcentaje = 10;
        $cliente = Clientes::find($id);                                             //Busca en la base de datos un cliente con el id especificado
        $epss = Entidad::Search()->where('tipo', '=', "1")->get();                  //Realiza la busqueda de entidades que tengan tipo = 1
        $arls = Entidad::Search()->where('tipo', '=', "2")->get();                  //Realiza la busqueda de entidades que tengan tipo = 2
        $afps = Entidad::Search()->where('tipo', '=', "3")->get();                  //Realiza la busqueda de entidades que tengan tipo = 3
        $cajacomps = Entidad::Search()->where('tipo', '=', "4")->get();             //Realiza la busqueda de entidades que tengan tipo = 4
        $eps = Entidad::Search()->where('id', '=', $cliente->id_eps)->first();      //Realiza la busqueda de ciudades que tengan id = al id de la eps que se retorna al buscar
        $arl = Entidad::Search()->where('id', '=', $cliente->id_arl)->first();      //Realiza la busqueda de ciudades que tengan id = al id de la arl que se retorna al buscar
        $afp = Entidad::Search()->where('id', '=', $cliente->id_afp)->first();      //Realiza la busqueda de ciudades que tengan id = al id de la afp que se retorna al buscar
        $cajacomp = Entidad::Search()->where('id', '=', $cliente->id_cjc)->first(); //Realiza la busqueda de ciudades que tengan id = al id de la cjc que se retorna al buscar
        $ciudad = Ciudad::Search()->where('id', '=', $cliente->id_ciudad)->first(); //Realiza la busqueda de ciudades que tengan id = al id de la ciudad que se retorna al buscar
        $ciudades = Ciudad::Search()->get();


        return view('clientes.edit', compact('cliente', 'porcentaje', 'ciudades', 'ciudad', 'epss', 'arls', 'afps', 'cajacomps', 'eps', 'arl', 'afp', 'cajacomp')); //Retorna a al vista edit de clientes con las variables de porcentaje, cliente, clientes, ciudades, ciudad, epss, arls, afps, cajacomps, eps, arl, afp y cajacomp
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(ClientesRequest $request, $id)
    {
        $clientes = Clientes::find($id);                        //Busca en la base de datos un cliente con el id especificado

        $clientes->identificacion   = $request->identificacion;
        $clientes->tipo_id          = $request->tipo_id;
        $clientes->nombres          = $request->nombres;
        $clientes->apellidos        = $request->apellidos;
        $clientes->estado           = $request->estado;
        $clientes->telefono         = $request->telefono;
        $clientes->direccion        = $request->direccion;
        $clientes->email            = $request->email;
        $clientes->tipo_cliente     = $request->tipo_cliente;
        $clientes->fecha_ingreso    = $request->fecha_ingreso;
        $clientes->fecha_nacimiento = $request->fecha_nacimiento;
        $clientes->salario          = $request->salario;
        $clientes->id_ciudad        = $request->id_ciudad;
        $clientes->id_eps           = $request->id_eps;
        $clientes->id_arl           = $request->id_arl;
        $clientes->id_afp           = $request->id_afp;
        $clientes->id_cjc           = $request->id_cjc;
        $clientes->beneficio        = $request->beneficio;
        $clientes->rango            = $request->rango;
        $clientes->upc              = $request->upc;
        $clientes->inscripcion       = $request->inscripcion;
        $clientes->administracion   = $request->administracion;
        //           $clientes->id_usuario      = $request->id_usuario;


        $clientes->save();                                      //Almacena los nuevos datos del objeto clientes

        return redirect()->route('clientes.index')              //Redirecciona a la vista index de clientes
            ->with('info', 'El cliente fue actualizado');       //Envia un mensaje de tipo info
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clientes $clientes)
    {
        //
    }
}

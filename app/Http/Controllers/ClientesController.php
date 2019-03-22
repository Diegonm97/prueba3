<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Entidad;
use App\Empresa;
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
        $clientes = Clientes::search1($request->nuip)->orderbydesc('id')->paginate('8');

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $epss = Entidad::Search()->where('tipo','=', "1")->get();
        $arls = Entidad::Search()->where('tipo','=', "2")->get();
        $afps = Entidad::Search()->where('tipo','=', "3")->get();
        $cajacomps = Entidad::Search()->where('tipo','=', "4")->get();
        $porcentaje = 10;
        return view('clientes.create',compact('porcentaje', 'epss','arls','afps','cajacomps'));  
    }

    public function createEmp($id)
    {
        
        $empresa = Empresa::findOrFail($id);
        return view('clientes.createEmp', compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {
        $clientes = new Clientes;


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
            
        $clientes->save();

            return redirect()->route('clientes.index')
            ->with('info','El cliente fue creado');
    }



    

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Clientes::find($id);
        return view('clientes.show', compact('cliente'));
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
        $cliente =Clientes::find($id);

        return view('clientes.edit', compact('cliente','porcentaje'));
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
            $clientes = Clientes::find($id);

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
            $clientes->incripcion       = $request->incripcion;
            $clientes->administracion   = $request->administracion;
            $clientes->id_usuario      = $request->id_usuario;
            
            
            $clientes->save();

            return redirect()->route('clientes.index')->with('info','El cliente fue actualizado');
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

<?php

namespace App\Http\Controllers;

use App\Empleado_empresa;
use App\Entidad;
use App\Ciudad;
use App\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\Empleado_empresaRequest;

class Empleado_empresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empleadoEmpS = Empleado_empresa::search1($request->identificacion)->orderbydesc('id')->paginate('8');
        $empresas = Empresa::search()->get();

        return view('empleado_empresa.index', compact('empleadoEmpS', 'empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $epss = Entidad::Search()->where('tipo', '=', "1")->get();
        $arls = Entidad::Search()->where('tipo', '=', "2")->get();
        $afps = Entidad::Search()->where('tipo', '=', "3")->get();
        $cajacomps = Entidad::Search()->where('tipo', '=', "4")->get();
        $ciudades = Ciudad::Search()->get();
        $empresas = Empresa::Search()->get();
        $porcentaje = 10;
        $empresa = null;
        $ciudad = null;
        $eps = null;
        $arl = null;
        $afp = null;
        $cajacomp = null;
        return view(
            'empleado_empresa.create',
            compact('porcentaje', 'epss', 'arls', 'afps', 'cajacomps', 'ciudades', 'empresas', 'empresa', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Empleado_empresaRequest $request)
    {
        $empleadoEmpS = new Empleado_empresa;

        $empleadoEmpS->id_empresa       = $request->id_empresa;
        $empleadoEmpS->identificacion   = $request->identificacion;
        $empleadoEmpS->tipo_id          = $request->tipo_id;
        $empleadoEmpS->nombres          = $request->nombres;
        $empleadoEmpS->apellidos        = $request->apellidos;
        $empleadoEmpS->telefono         = $request->telefono;
        $empleadoEmpS->direccion        = $request->direccion;
        $empleadoEmpS->email            = $request->email;
        $empleadoEmpS->tipo_cliente     = $request->tipo_cliente;
        $empleadoEmpS->fecha_ingreso    = $request->fecha_ingreso;
        $empleadoEmpS->fecha_nacimiento = $request->fecha_nacimiento;
        $empleadoEmpS->salario          = $request->salario;
        $empleadoEmpS->rango            = $request->rango;
        $empleadoEmpS->upc              = $request->upc;
        $empleadoEmpS->id_ciudad        = $request->id_ciudad;
        $empleadoEmpS->id_eps           = $request->id_eps;
        $empleadoEmpS->id_arl           = $request->id_arl;
        $empleadoEmpS->id_afp           = $request->id_afp;
        $empleadoEmpS->id_cjc           = $request->id_cjc;
        $empleadoEmpS->estado           = $request->estado;

        $empleadoEmpS->save();

        return redirect()->route('empleado_empresa.index')
            ->with('info', 'El empleado fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleadoEmp = Empleado_empresa::find($id);
        $empresa = Empresa::Search()->where('id', '=', $empleadoEmp->id_empresa)->first();
        $ciudad = Ciudad::Search()->where('id', '=', $empleadoEmp->id_ciudad)->first();
        $eps = Entidad::Search()->where('id', '=', $empleadoEmp->id_eps)->first();
        $arl = Entidad::Search()->where('id', '=', $empleadoEmp->id_arl)->first();
        $afp = Entidad::Search()->where('id', '=', $empleadoEmp->id_afp)->first();
        $cajacomp = Entidad::Search()->where('id', '=', $empleadoEmp->id_cjc)->first();
        return view('empleado_empresa.show', compact('empleadoEmp','empresa', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleadoEmp = Empleado_empresa::find($id);
        $ciudades = Ciudad::Search()->get();
        $empresas = Empresa::search()->get();
        $empresa = Empresa::Search()->where('id', '=', $empleadoEmp->id_empresa)->first();
        $epss = Entidad::Search()->where('tipo', '=', "1")->get();
        $arls = Entidad::Search()->where('tipo', '=', "2")->get();
        $afps = Entidad::Search()->where('tipo', '=', "3")->get();
        $cajacomps = Entidad::Search()->where('tipo', '=', "4")->get();
        $ciudad = Ciudad::Search()->where('id', '=', $empleadoEmp->id_ciudad)->first();
        $eps = Entidad::Search()->where('id', '=', $empleadoEmp->id_eps)->first();
        $arl = Entidad::Search()->where('id', '=', $empleadoEmp->id_arl)->first();
        $afp = Entidad::Search()->where('id', '=', $empleadoEmp->id_afp)->first();
        $cajacomp = Entidad::Search()->where('id', '=', $empleadoEmp->id_cjc)->first();
        $porcentaje = 10;

        return view('empleado_empresa.edit', compact('empleadoEmp', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp', 'ciudades', 'empresas', 'empresa', 'epss', 'arls', 'afps', 'cajacomps', 'porcentaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Empleado_empresaRequest $request, $id)
    {
        $empleadoEmpS = Empleado_empresa::find($id);

        $empleadoEmpS->id_empresa       = $request->id_empresa;
        $empleadoEmpS->identificacion   = $request->identificacion;
        $empleadoEmpS->tipo_id          = $request->tipo_id;
        $empleadoEmpS->nombres          = $request->nombres;
        $empleadoEmpS->apellidos        = $request->apellidos;
        $empleadoEmpS->telefono         = $request->telefono;
        $empleadoEmpS->direccion        = $request->direccion;
        $empleadoEmpS->email            = $request->email;
        $empleadoEmpS->tipo_cliente     = $request->tipo_cliente;
        $empleadoEmpS->fecha_ingreso    = $request->fecha_ingreso;
        $empleadoEmpS->fecha_nacimiento = $request->fecha_nacimiento;
        $empleadoEmpS->salario          = $request->salario;
        $empleadoEmpS->rango            = $request->rango;
        $empleadoEmpS->upc              = $request->upc;
        $empleadoEmpS->id_ciudad        = $request->id_ciudad;
        $empleadoEmpS->id_eps           = $request->id_eps;
        $empleadoEmpS->id_arl           = $request->id_arl;
        $empleadoEmpS->id_arl           = $request->id_afp;
        $empleadoEmpS->id_arl           = $request->id_cjc;
        $empleadoEmpS->id_arl           = $request->estado;

        $empleadoEmpS->save();

        return redirect()->route('empleado_empresa.index')
            ->with('info', 'El empleado fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado_empresa $empleado)
    {
        //
    }
}

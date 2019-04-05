<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Empresa;
use App\Entidad;
use App\Ciudad;
use App\Configuracion;
use App\Empleado_empresa;
use App\Pago;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresasRequest;
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $empresas = Empresa::search1($request->idEmpresaContraEmp)->orderByDesc('id')->paginate('8');



        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $epss = Entidad::Search()->where('tipo', '=', "eps")->get();
        $arls = Entidad::Search()->where('tipo', '=', "arl")->get();
        $afps = Entidad::Search()->where('tipo', '=', "afp")->get();
        $cajacomps = Entidad::Search()->where('tipo', '=', "cajacomp")->get();
        $ciudades = Ciudad::Search()->get();
        $ciudad = null;
        return view('empresas.create', compact('epss', 'arls', 'afps', 'cajacomps', 'ciudades', 'ciudad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(empresasRequest $request)
    {
        $empresas = new Empresa;
        $user = new User;
        $rol = new Role_user;
        $administracion = Configuracion::Search()->where('codigo', '=', "ADMIN")->first();
        $inscripcion = Configuracion::Search()->where('codigo', '=', "INSCRI")->first();

        $user->name = $request->nombres;
        $user->email = $request->email;
        $user->password = bcrypt($request->identificacion);
        $user->save();

        $rol->role_id = 3;
        $rol->user_id = $user->id;
        $rol->save();


        $empresas->nit = $request->nit;
        $empresas->nombre = $request->nombre;
        $empresas->nombre_contacto = $request->nombre_contacto;
        $empresas->telefono_contacto = $request->telefono_contacto;
        $empresas->email_contacto = $request->email_contacto;
        $empresas->id_ciudad = $request->id_ciudad;
        $empresas->direccion = $request->direccion;
        $empresas->estado = $request->estado;
        $empresas->beneficio = $request->beneficio;
        if(isset($request->inscripcion)){
            $empresas->inscripcion = $request->inscripcion;
        }else{
            $empresas->inscripcion = $inscripcion->valor ;
        }

        if (isset($request->administracion)) {
            $empresas->administracion = $request->administracion;
        } else {
            $empresas->administracion = $administracion->valor;
        }
        $empresas->id_usuario = $request->id_usuario;
        $empresas->fecha_ingreso = $request->fecha_ingreso;
        $empresas->observacion = $request->observacion;
        $empresas->id_usuario       = $user->id;

        $empresas->save();

        $empresa = $empresa->id;

        return redirect()->route('empresa.show', compact('empresa'))
            ->with('info', 'La empresa fue creado');
    }


    public function pagocaja($id){
        
        $cliente = Empresa::find($id);
        $mes = date('m');

        $pagoc = DB::table('pago')->where('id_usuario','=', $cliente->id)->where('mes', '=', $mes)->count();

        if($pagoc == 0){
            $pago = new Pago;
            $pago->id_usuario = $cliente->id;
            $pago->estado = 1;
            $pago->mes = $mes;
            $pago->tipo = 2;
            $pago->save();
        }

        return redirect()->route('empresa.index')
            ->with('info', 'El pago se realizó satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $empresa = Empresa::find($id);

        $empleados = Empleado_empresa::Search()->where('id_empresa', '=', $empresa->id)->get();

        $pago_emp = DB::table('empleado_empresa')->where('id_empresa', $empresa->id)->sum('pago');
        $iva = Configuracion::Search()->where('codigo', '=', "IVA")->first();
        $ivainsc = ($empresa->inscripcion * $iva->valor / 100) + $empresa->inscripcion;
        $ivaadmi = ($empresa->administracion * $iva->valor / 100) + $empresa->administracion;

        $total = $pago_emp + $ivaadmi + $ivainsc;
        $empresa->total_pago = $total;
        $empresa->save();

        //$clientes = Clientes::where('idEmpresaContraCli','=', $empresa->idEmpresaContraEmp)->get();
        $ciudad = Ciudad::Search()->where('id', '=', $empresa->id_ciudad)->first();

        return view('empresas.show', compact('empresa', 'ciudad', 'empleados', 'total', 'ivainsc', 'ivaadmi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        $ciudades = Ciudad::Search()->get();
        $ciudad = Ciudad::Search()->where('id', '=', $empresa->id_ciudad)->first();
        return view('empresas.edit', compact('empresa', 'ciudad', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function update(empresasRequest $request, $id)
    {
        $empresas = Empresa::find($id);
        $administracion = Configuracion::Search()->where('codigo', '=', "ADMIN")->first();
        $inscripcion = Configuracion::Search()->where('codigo', '=', "INSCRI")->first();
        $user = $empresas->id_usuario;

        $empresas->nit = $request->nit;
        $empresas->nombre = $request->nombre;
        $empresas->nombre_contacto = $request->nombre_contacto;
        $empresas->telefono_contacto = $request->telefono_contacto;
        $empresas->email_contacto = $request->email_contacto;
        $empresas->id_ciudad = $request->id_ciudad;
        $empresas->direccion = $request->direccion;
        $empresas->estado = $request->estado;
        $empresas->beneficio = $request->beneficio;
        if(isset($request->inscripcion)){
            $empresas->inscripcion = $request->inscripcion;
        }else{
            $empresas->inscripcion = $inscripcion->valor ;
        }

        if (isset($request->administracion)) {
            $empresas->administracion = $request->administracion;
        } else {
            $empresas->administracion = $administracion->valor;
        }
        $empresas->id_usuario = $request->id_usuario;
        $empresas->fecha_ingreso = $request->fecha_ingreso;
        $empresas->observacion = $request->observacion;
        $empresas->id_usuario = $user;

        $empresas->save();

        $empresa = $empresas->id;

        return redirect()->route('empresa.show', compact('empresa'))
            ->with('info', 'El empresa fue actualizado');
    }
    public function destroy(Empresa $empresa)
    {
        //
    }
}

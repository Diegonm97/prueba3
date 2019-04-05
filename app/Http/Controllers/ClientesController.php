<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Entidad;
use App\Ciudad;
use App\User;
use App\Role_user;
use App\Configuracion;
use App\Facturacion;
use App\Pago;
use Illuminate\Http\Request;
use App\Http\Requests\ClientesRequest;
use Illuminate\Support\Facades\DB;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $clientes = Clientes::search1($request->identificacion)->orderbydesc('id')->paginate('8');

        return view('clientes.index', compact('clientes'));
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
        $ciudad = null;
        $eps = null;
        $arl = null;
        $afp = null;
        $cajacomp = null;
        $porcentaje = 10;

        return view('clientes.create', compact('porcentaje', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp', 'epss', 'arls', 'afps', 'cajacomps', 'ciudades'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {
        $user = new User;
        $clientes = new Clientes;
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
        if(isset($request->inscripcion)){
            $clientes->inscripcion = $request->inscripcion;
        }else{
            $clientes->inscripcion = $administracion->valor ;
        }

        if (isset($request->administracion)) {
            $clientes->administracion = $request->administracion;
        } else {
            $clientes->administracion = $inscripcion->valor;
        }
        $clientes->sercofun         = $request->sercofun;
        $clientes->emi              = $request->emi;
        $clientes->observacion      = $request->observacion;
        $clientes->id_usuario       = $user->id;

        $clientes->save();

        $cliente = $clientes->id;

        return redirect()->route('clientes.show', compact('cliente'))
            ->with('info', 'El cliente fue creado');
    }


    public function facturacion($id){
        $cliente = Clientes::find($id);
        $eps = Configuracion::Search()->where('codigo', '=', "EPS")->first();

        if(isset($cliente->id_arl)){
            switch ($cliente->rango) {
                case '1':
                    $arl = Configuracion::Search()->where('codigo', '=', "ARLR1")->first();
                    break;
                case '2':
                    $arl = Configuracion::Search()->where('codigo', '=', "ARLR2")->first();
                    break;
                case '3':
                    $arl = Configuracion::Search()->where('codigo', '=', "ARLR3")->first();
                    break;
                case '4':
                    $arl = Configuracion::Search()->where('codigo', '=', "ARLR4")->first();
                    break;
                case '5':
                    $arl = Configuracion::Search()->where('codigo', '=', "ARLR5")->first();
                    break;
                
                default:
                    $arl = 1;
                    break;
            }

            $arlt = $cliente->salario * $arl->valor / 100;
        } else {
            $arlt = 0;
        }

        $afp = Configuracion::Search()->where('codigo', '=', "AFP")->first();

        if($cliente->beneficio == 2){
            if(isset($cliente->id_cjc)){
                $cjct = $cliente->salario * 4 / 100;
            }else{
                $cjct = 0;
            }
            $epst = $cliente->salario * 4 / 100;
        }else{
            $cjct = 0;
            $epst = $cliente->salario * $eps->valor / 100;
        }
        
        $upc = Configuracion::Search()->where('codigo', '=', "UPC")->first();
        $iva = Configuracion::Search()->where('codigo', '=', "IVA")->first();
        if($cliente->sercofun == 2){
            $sercofun = Configuracion::Search()->where('codigo', '=', "SERCOFUN")->first();
            $serc = $sercofun->valor;
        } else {
            $serc = 0;
        }

        if($cliente->emi == 2){
            $emi = Configuracion::Search()->where('codigo', '=', "EMI")->first();
            $emit = $emi->valor;
        } else {
            $emit = 0;
        }

        
        $afpt = $cliente->salario * $afp->valor / 100;
        $upct = $cliente->upc * $upc->valor;
        $ivainsc = ($cliente->inscripcion * $iva->valor / 100) + $cliente->inscripcion;
        $ivaadmi = ($cliente->administracion * $iva->valor / 100) + $cliente->administracion;

        $total = $serc + $emit + $arlt + $cjct + $epst + $afpt + $upct + $ivaadmi + $ivainsc ;

        $cliente->pago = $total;
        $cliente->save();

        return view('clientes.facturacion', compact('cliente', 'total', 'epst', 'serc', 'emit', 'arlt', 'cjct', 'afpt', 'upct', 'ivainsc', 'ivaadmi'));
    }

    public function pagocaja($id){
        
        $cliente = Clientes::find($id);
        $mes = date('m');

        $pagoc = DB::table('pago')->where('id_usuario','=', $cliente->id)->where('mes', '=', $mes)->count();

        if($pagoc == 0){
            $pago = new Pago;
            $pago->id_usuario = $cliente->id;
            $pago->estado = 1;
            $pago->mes = $mes;
            $pago->tipo = 1;
            $pago->save();
        }

        return redirect()->route('clientes.index')
            ->with('info', 'El pago se realizó satisfactoriamente');
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
        $ciudad = Ciudad::Search()->where('id', '=', $cliente->id_ciudad)->first();
        $eps = Entidad::Search()->where('id', '=', $cliente->id_eps)->first();
        $arl = Entidad::Search()->where('id', '=', $cliente->id_arl)->first();
        $afp = Entidad::Search()->where('id', '=', $cliente->id_afp)->first();
        $cajacomp = Entidad::Search()->where('id', '=', $cliente->id_cjc)->first();
        return view('clientes.show', compact('cliente', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp'));
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
        $cliente = Clientes::find($id);
        $epss = Entidad::Search()->where('tipo', '=', "1")->get();
        $arls = Entidad::Search()->where('tipo', '=', "2")->get();
        $afps = Entidad::Search()->where('tipo', '=', "3")->get();
        $eps = Entidad::Search()->where('id', '=', $cliente->id_eps)->first();
        $arl = Entidad::Search()->where('id', '=', $cliente->id_arl)->first();
        $afp = Entidad::Search()->where('id', '=', $cliente->id_afp)->first();
        $cajacomp = Entidad::Search()->where('id', '=', $cliente->id_cjc)->first();
        $cajacomps = Entidad::Search()->where('tipo', '=', "4")->get();
        $ciudad = Ciudad::Search()->where('id', '=', $cliente->id_ciudad)->first();
        $ciudades = Ciudad::Search()->get();


        return view('clientes.edit', compact('cliente', 'porcentaje', 'ciudades', 'ciudad', 'epss', 'arls', 'afps', 'cajacomps', 'eps', 'arl', 'afp', 'cajacomp'));
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
        $user = $clientes->id_usuario;

        $administracion = Configuracion::Search()->where('codigo', '=', "ADMIN")->first();
        $inscripcion = Configuracion::Search()->where('codigo', '=', "INSCRI")->first();

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
        if(isset($request->inscripcion)){
            $clientes->inscripcion = $request->inscripcion;
        }else{
            $clientes->inscripcion = $administracion->valor ;
        }

        if (isset($request->administracion)) {
            $clientes->administracion = $request->administracion;
        } else {
            $clientes->administracion = $inscripcion->valor;
        }
        $clientes->sercofun         = $request->sercofun;
        $clientes->emi              = $request->emi;
        $clientes->observacion      = $request->observacion;
        $clientes->id_usuario       = $user;

        $clientes->save();

        $cliente = $clientes->id;

        return redirect()->route('clientes.show', compact('cliente'))
            ->with('info', 'El cliente fue actualizado');
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

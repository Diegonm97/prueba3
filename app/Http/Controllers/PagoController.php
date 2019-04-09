<?php

namespace App\Http\Controllers;

use App\Pago;
use App\Configuracion;
use App\Clientes;
use App\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\PagosRequest;
use Illuminate\Support\Facades\DB;


class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $mes = date('m');
        $user = auth()->user()->email;
        $logueocli = DB::select('SELECT * FROM cliente WHERE email = ?', [$user]);
        $logueoemp = DB::select('SELECT * FROM empresa WHERE email_contacto = ?', [$user]);
        $usuario = null; $pago = null;

        if (count($logueocli) > 0) {
            $usuario = $logueocli;
        } elseif (count($logueoemp) > 0) {
            $usuario = $logueoemp;
        }

        if (isset($usuario)) {
            $pago = DB::select('SELECT * FROM pago WHERE id_usuario = ? and mes = ?', [$usuario[0]->id, $mes]);
        }

        $pagoscli = DB::select('SELECT * FROM pago WHERE mes = ?', [$mes]);
        $emp_activo = array();
        $cli_activo = array();
        $clie = array();
        $empr = array();
        $totalmes = array();

        foreach ($pagoscli as $cliente) {
            if ($cliente->tipo == 1) {
                $cli_activo[] = $cliente->id_usuario;
                $clie[] = $cliente->id_usuario;
            } else {
                $emp_activo[] = $cliente->id_usuario;
                $empr[] = $cliente->id_usuario;
            }
        }


        $total = array_sum($totalmes);

        $cliente = Clientes::Search()->get();
        $empresa = Empresa::Search()->get();
        $clientes = array();
        $empresas = array();

        foreach ($cliente as $cliente) {
            $clientes[]= $cliente->id;
        }

        foreach ($empresa as $empresa) {
            $empresas[]= $empresa->id;
        }


        $cli_inactivo = array_diff($clientes, $clie);
        $emp_inactivo = array_diff($empresas, $empr);


        return view('pagos.index', compact('activo', 'mes', 'cli_inactivo', 'emp_inactivo', 'usuario', 'emp_activo', 'cli_activo' ,'pago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pagos = new Pago;

        $pagos->nuipPago             =       $request->nuipPago;
        $pagos->nombrePago           =       $request->nombrePago;
        $pagos->oficinaPago          =       $request->oficinaPago;
        $pagos->telefonoPago         =       $request->telefonoPago;
        $pagos->emailPago            =       $request->emailPago;
        $pagos->salarioPago          =       $request->salarioPago;
        $pagos->EPSpago              =       $request->EPSpago;
        $pagos->AFPpago              =       $request->AFPpago;
        $pagos->ARLpago              =       $request->ARLpago;
        $pagos->cajaCompPago         =       $request->cajaCompPago;
        $pagos->mesPago              =       $request->mesPago;
        $pagos->estadoClientePago    =       $request->estadoClientePago;
        $pagos->sumaPago             =       $request->sumaPago;
        $pagos->interesesPago        =       $request->interesesPago;
        $pagos->sumTotalPago         =       $request->sumTotalPago;
        $pagos->abonoPago            =       $request->abonoPago;
        $pagos->formaPago            =       $request->formaPago;
        $pagos->proximoPago          =       $request->proximoPago;
        $pagos->observacionPago      =       $request->observacionPago;
        $pagos->informePago          =       $request->informePago;
        $pagos->empresaContPago      =       $request->empresaContPago;
        $pagos->costoAdminPago       =       $request->costoAdminPago;
        $pagos->EMIpago              =       $request->EMIpago;
        $pagos->descuentoPago        =       $request->descuentoPago;
        $pagos->UPCadicPago          =       $request->UPCadicPago;
        $pagos->sevFunePago          =       $request->sevFunePago;
        $pagos->inscripcionPago      =       $request->inscripcionPago;
        $pagos->activacionPago       =       $request->activacionPago;
        $pagos->aporteVoluPago       =       $request->aporteVoluPago;


        $pagos->save();

        return redirect()->route('pago.index')
            ->with('info', 'El cliente fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagos = Pago::find($id);
        return view('pagos.show', compact('pagos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pago = Pago::find($id);



        return view('pagos.edit', compact('pago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(PagosRequest $request, $id)
    {
        $pagos = Pago::find($id);

        $pagos->nuipPago             =       $request->nuipPago;
        $pagos->nombrePago           =       $request->nombrePago;
        $pagos->oficinaPago          =       $request->oficinaPago;
        $pagos->telefonoPago         =       $request->telefonoPago;
        $pagos->emailPago            =       $request->emailPago;
        $pagos->salarioPago          =       $request->salarioPago;
        $pagos->EPSpago              =       $request->EPSpago;
        $pagos->AFPpago              =       $request->AFPpago;
        $pagos->ARLpago              =       $request->ARLpago;
        $pagos->cajaCompPago         =       $request->cajaCompPago;
        $pagos->mesPago              =       $request->mesPago;
        $pagos->estadoClientePago    =       $request->estadoClientePago;
        $pagos->sumaPago             =       $request->sumaPago;
        $pagos->interesesPago        =       $request->interesesPago;
        $pagos->sumTotalPago         =       $request->sumTotalPago;
        $pagos->abonoPago            =       $request->abonoPago;
        $pagos->formaPago            =       $request->formaPago;
        $pagos->proximoPago          =       $request->proximoPago;
        $pagos->observacionPago      =       $request->observacionPago;
        $pagos->informePago          =       $request->informePago;
        $pagos->empresaContPago      =       $request->empresaContPago;
        $pagos->costoAdminPago       =       $request->costoAdminPago;
        $pagos->EMIpago              =       $request->EMIpago;
        $pagos->descuentoPago        =       $request->descuentoPago;
        $pagos->UPCadicPago          =       $request->UPCadicPago;
        $pagos->sevFunePago          =       $request->sevFunePago;
        $pagos->inscripcionPago      =       $request->inscripcionPago;
        $pagos->activacionPago       =       $request->activacionPago;
        $pagos->aporteVoluPago       =       $request->aporteVoluPago;


        $pagos->save();

        return redirect()->route('pago.index')
            ->with('info', 'El pago fue modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        //
    }
}

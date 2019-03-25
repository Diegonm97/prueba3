<?php

namespace App\Http\Controllers;

use App\Pago;
use Illuminate\Http\Request;
use App\Http\Requests\PagosRequest;


class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pagos = Pago::search1($request->nuipPago)->orderbydesc('nuipPago')->paginate('8');

        return view('pagos.index', compact('pagos'));
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

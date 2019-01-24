<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresasRequest;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(Request $request)
    {   
        
        $empresas = Empresa::search1($request->idNIT)->orderBy('idNIT')->paginate('8');

        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(empresasRequest $request)
    {
        $empresas = new empresas;

            $empresas->nuip            = $request->nuip;
            $empresas->nombreEmp       = $request->nombreEmp;
            $empresas->estadoEmp       = $request->estadoEmp;
            $empresas->tipoIdEmp       = $request->tipoIdEmp;
            $empresas->direccionEmp    = $request->direccionEmp;
            $empresas->oficinaEmp      = $request->oficinaEmp;
            $empresas->ciudadEmp       = $request->ciudadEmp;
            $empresas->telefonoEmp     = $request->telefonoEmp;
            $empresas->emailEmp        = $request->emailEmp;
            $empresas->fechaNacEmp     = $request->fechaNacEmp;
            $empresas->salarioEmp      = $request->salarioEmp;
            $empresas->rangoEmp        = $request->rangoEmp;
            $empresas->EPSEmp          = $request->EPSEmp;
            $empresas->ARLEmp          = $request->ARLEmp;
            $empresas->AFPEmp          = $request->AFPEmp;
            $empresas->cajaCompEmp     = $request->cajaCompEmp;
            $empresas->beneficioEmp    = $request->beneficioEmp;
            $empresas->fechaIngEmp     = $request->fechaIngEmp;
            $empresas->tipoEmp     = $request->tipoEmp;
            $empresas->idEmpresaContraEmp = $request->idEmpresaContraEmp;
            $empresas->idNIT           = $request->idNIT;
            $empresas->nombreEmpEmp    = $request->nombreEmpEmp;
            $empresas->UPCadicEmp    = $request->UPCadicEmp;
            $empresas->estadoPago      = $request->estadoPago;

            $empresas->save();

            return redirect()->route('empresas.index')
            ->with('info','El empresa fue creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);
        return view('empresas.show', compact('empresa'));
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
        return view('empresas.edit', compact('empresa'));
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
            $empresas = empresas::find($id);

            $empresas->nuip            = $request->nuip;
            $empresas->nombreEmp       = $request->nombreEmp;
            $empresas->estadoEmp       = $request->estadoEmp;
            $empresas->tipoIdEmp       = $request->tipoIdEmp;
            $empresas->direccionEmp    = $request->direccionEmp;
            $empresas->oficinaEmp      = $request->oficinaEmp;
            $empresas->ciudadEmp       = $request->ciudadEmp;
            $empresas->telefonoEmp     = $request->telefonoEmp;
            $empresas->emailEmp        = $request->emailEmp;
            $empresas->fechaNacEmp     = $request->fechaNacEmp;
            $empresas->salarioEmp      = $request->salarioEmp;
            $empresas->rangoEmp        = $request->rangoEmp;
            $empresas->EPSEmp          = $request->EPSEmp;
            $empresas->ARLEmp          = $request->ARLEmp;
            $empresas->AFPEmp          = $request->AFPEmp;
            $empresas->cajaCompEmp     = $request->cajaCompEmp;
            $empresas->beneficioEmp    = $request->beneficioEmp;
            $empresas->fechaIngEmp     = $request->fechaIngEmp;
            $empresas->tipoEmp     = $request->tipoEmp;
            $empresas->idEmpresaContraEmp = $request->idEmpresaContraEmp;
            $empresas->idNIT           = $request->idNIT;
            $empresas->nombreEmpEmp    = $request->nombreEmpEmp;
            $empresas->UPCadicEmp    = $request->UPCadicEmp;
            $empresas->estadoPago      = $request->estadoPago;

            $empresas->save();

            return redirect()->route('empresas.index')
            ->with('info','El empresa fue actualizado');
    }
    public function destroy(Empresa $empresa)
    {
        //
    }
}

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
            $empresas->nombreCli       = $request->nombreCli;
            $empresas->estadoCli       = $request->estadoCli;
            $empresas->tipoIdCli       = $request->tipoIdCli;
            $empresas->direccionCli    = $request->direccionCli;
            $empresas->oficinaCli      = $request->oficinaCli;
            $empresas->ciudadCli       = $request->ciudadCli;
            $empresas->telefonoCli     = $request->telefonoCli;
            $empresas->emailCli        = $request->emailCli;
            $empresas->fechaNacCli     = $request->fechaNacCli;
            $empresas->salarioCli      = $request->salarioCli;
            $empresas->rangoCli        = $request->rangoCli;
            $empresas->EPScli          = $request->EPScli;
            $empresas->ARLcli          = $request->ARLcli;
            $empresas->AFPcli          = $request->AFPcli;
            $empresas->cajaCompCli     = $request->cajaCompCli;
            $empresas->beneficioCli    = $request->beneficioCli;
            $empresas->fechaIngCli     = $request->fechaIngCli;
            $empresas->tipoCli     = $request->tipoCli;
            $empresas->idEmpresaContraCli = $request->idEmpresaContraCli;
            $empresas->idNIT           = $request->idNIT;
            $empresas->nombreEmpCli    = $request->nombreEmpCli;
            $empresas->UPCadicCli    = $request->UPCadicCli;
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
        $empresa =empresas::find($id);
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
        $empresa =empresas::find($id);
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
            $empresas->nombreCli       = $request->nombreCli;
            $empresas->estadoCli       = $request->estadoCli;
            $empresas->tipoIdCli       = $request->tipoIdCli;
            $empresas->direccionCli    = $request->direccionCli;
            $empresas->oficinaCli      = $request->oficinaCli;
            $empresas->ciudadCli       = $request->ciudadCli;
            $empresas->telefonoCli     = $request->telefonoCli;
            $empresas->emailCli        = $request->emailCli;
            $empresas->fechaNacCli     = $request->fechaNacCli;
            $empresas->salarioCli      = $request->salarioCli;
            $empresas->rangoCli        = $request->rangoCli;
            $empresas->EPScli          = $request->EPScli;
            $empresas->ARLcli          = $request->ARLcli;
            $empresas->AFPcli          = $request->AFPcli;
            $empresas->cajaCompCli     = $request->cajaCompCli;
            $empresas->beneficioCli    = $request->beneficioCli;
            $empresas->fechaIngCli     = $request->fechaIngCli;
            $empresas->tipoCli     = $request->tipoCli;
            $empresas->idEmpresaContraCli = $request->idEmpresaContraCli;
            $empresas->idNIT           = $request->idNIT;
            $empresas->nombreEmpCli    = $request->nombreEmpCli;
            $empresas->UPCadicCli    = $request->UPCadicCli;
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

<?php

namespace App\Http\Controllers;

use App\Clientes;
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
        $empresas = new Empresa;

            $empresas->nuip            = $request->nuip;
            $empresas->nombreCli       = $request->nombreCli;
            $empresas->estadoEmp       = $request->estadoEmp;
            $empresas->tipoIdEmp       = $request->tipoIdEmp;
            $empresas->direccionEmp    = $request->direccionEmp;
            $empresas->oficinaEmp      = $request->oficinaEmp;
            $empresas->ciudadEmp       = $request->ciudadEmp;
            $empresas->telefonoEmp     = $request->telefonoEmp;
            $empresas->emailEmp        = $request->emailEmp;
            $empresas->fechaIngEmp     = $request->fechaIngEmp;
            $empresas->tipoEmp         = $request->tipoEmp;
            $empresas->idEmpresaContraEmp = $request->idEmpresaContraEmp;
            $empresas->idNIT           = $request->idNIT;
            $empresas->nombreEmp       = $request->nombreEmp;
            $empresas->estadoPago      = $request->estadoPago;

            $empresas->save();


            
            return redirect("/createEmp/$empresas->id");
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
        $clientes = Clientes::all();
        
        $detalles = Empresa::where($clientes->idEmpresaContraCli,'=',$empresa->idEmpresaContraEmp)->first();
        
        return view('empresas.show', compact('empresa', 'detalles'));
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
            $empresas = Empresa::find($id);

            $empresas->nuip            = $request->nuip;
            $empresas->nombreCli       = $request->nombreCli;
            $empresas->estadoEmp       = $request->estadoEmp;
            $empresas->tipoIdEmp       = $request->tipoIdEmp;
            $empresas->direccionEmp    = $request->direccionEmp;
            $empresas->oficinaEmp      = $request->oficinaEmp;
            $empresas->ciudadEmp       = $request->ciudadEmp;
            $empresas->telefonoEmp     = $request->telefonoEmp;
            $empresas->emailEmp        = $request->emailEmp;
            $empresas->fechaIngEmp     = $request->fechaIngEmp;
            $empresas->tipoEmp         = $request->tipoEmp;
            $empresas->idEmpresaContraEmp = $request->idEmpresaContraEmp;
            $empresas->idNIT           = $request->idNIT;
            $empresas->nombreEmp       = $request->nombreEmp;
            $empresas->estadoPago      = $request->estadoPago;

            $empresas->save();

            return redirect()->route('empresa.index')
            ->with('info','El empresa fue actualizado');
    }
    public function destroy(Empresa $empresa)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Empresa;
use App\Entidad;
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
        
       
        

        return view('empresas.index',compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $epss = Entidad::Search()->where('tipo','=', "eps")->get();
        $arls = Entidad::Search()->where('tipo','=', "arl")->get();
        $afps = Entidad::Search()->where('tipo','=', "afp")->get();
        $cajacomps = Entidad::Search()->where('tipo','=', "cajacomp")->get();
        return view('empresas.create',compact('epss','arls','afps','cajacomps'));   
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

          
            $empresas->nit = $request->nit;
            $empresas->nombre = $request->nombre;
            $empresas->nombre_contacto = $request->nombre_contacto;
            $empresas->telefono_contacto = $request->telefono_contacto;
            $empresas->email_contacto = $request->email_contacto;
            $empresas->id_ciudad = $request->id_ciudad;
            $empresas->direccion = $request->direccion;
            $empresas->estado = $request->estado;
            $empresas->beneficio = $request->beneficio;
            $empresas->inscripcion = $request->inscripcion;
            $empresas->administracion = $request->administracion;
            $empresas->id_usuario = $request->id_usuario;
            $empresas->fecha_ingreso = $request->fecha_ingreso;
            $empresas->observacion = $request->observacion;
           
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

        
        //$clientes = Clientes::where('idEmpresaContraCli','=', $empresa->idEmpresaContraEmp)->get();
        
        return view('empresas.show', compact('empresa', 'clientes'));
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
            $empresas->nit = $request->nit;
            $empresas->nombre = $request->nombre;
            $empresas->nombre_contacto = $request->nombre_contacto;
            $empresas->telefono_contacto = $request->telefono_contacto;
            $empresas->email_contacto = $request->email_contacto;
            $empresas->id_ciudad = $request->id_ciudad;
            $empresas->direccion = $request->direccion;
            $empresas->estado = $request->estado;
            $empresas->beneficio = $request->beneficio;
            $empresas->inscripcion = $request->inscripcion;
            $empresas->id_usuario = $request->id_usuario;
            $empresas->fecha_ingreso = $request->fecha_ingreso;
            $empresas->observacion = $request->observacion;
            $empresas->save();

            return redirect()->route('empresa.index')
            ->with('info','El empresa fue actualizado');
    }
    public function destroy(Empresa $empresa)
    {
        //
    }
}

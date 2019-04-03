<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Empresa;
use App\Entidad;
use App\Ciudad;
use App\Empleado_empresa;
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

        $empresas = Empresa::search1($request->idEmpresaContraEmp)->orderByDesc('id')->paginate('8');   //Realiza la busqueda por idEmpresaContraEmp



        return view('empresas.index', compact('empresas'));     //retorna a la vista index de empresas junto con la variable empresas
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $epss = Entidad::Search()->where('tipo', '=', "eps")->get();    //Busca a las entidades que tengan tipo = eps
        $arls = Entidad::Search()->where('tipo', '=', "arl")->get();    //Busca a las entidades que tengan tipo = arl
        $afps = Entidad::Search()->where('tipo', '=', "afp")->get();    //Busca a las entidades que tengan tipo = afp
        $cajacomps = Entidad::Search()->where('tipo', '=', "cajacomp")->get();    //Busca a las entidades que tengan tipo = cajacomp
        $ciudades = Ciudad::Search()->get();                            //Busca todas las ciudades
        $ciudad = null;
        return view('empresas.create', compact('epss', 'arls', 'afps', 'cajacomps', 'ciudades', 'ciudad'));
        // Retorna a la vista create de empresas con las variables epss, arls, afps, cajacomps, ciudades y ciudad
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(empresasRequest $request)
    {
        $empresas = new Empresa;                    //Crea un objeto de tipo empresa


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

        $empresas->save();                          //Almacena los datos del objeto empresas



        return redirect()->route('empresa.index')       //Retorna a la vista index de empresa
            ->with('info', 'La empresa fue creado');    //Envia un mensaje de tipo info
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $empresa = Empresa::find($id);              //Busca en la base de datos una empresa con el id especificado
        $empleado_empresas= Empleado_empresa::Search()->where('id_empresa','=',$empresa->id)->orderByDesc('id')->paginate('8');

        //$clientes = Clientes::where('idEmpresaContraCli','=', $empresa->idEmpresaContraEmp)->get();
        $ciudad = Ciudad::Search()->where('id', '=', $empresa->id_ciudad)->first();
        //Busca una ciudad cullo id sea igual al id_ciudad  de la empresa encontrada

        return view('empresas.show', compact('empresa', 'ciudad','empleado_empresas')); //Retorna a la vista show de empresas con las variables de empresa, ciudad y empleado_empresas
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empresas  $empresas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);                  //Busca en la base de datos una empresa con el id especificado
        $ciudades = Ciudad::Search()->get();            //Busca en la base de datos todas las empresas
        $ciudad = Ciudad::Search()->where('id', '=', $empresa->id_ciudad)->first(); //Busca en la base de datos ciudades cullo id sea igual al id_ciudad de la empresa encontrada
        return view('empresas.edit', compact('empresa', 'ciudad', 'ciudades')); //Retorna a la vista edit de empresas con las variables empresa, ciudad y ciudades
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
        $empresas = Empresa::find($id);         //Busca en la base de datos una empresa con el id especificado


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


        $empresas->save();                      //Almacena los nuevos datos del objeto empresas

        return redirect()->route('empresa.index')   //Retorna a la vista index de empresa
            ->with('info', 'El empresa fue actualizado');   //Envia un mensaje de tipo info
    }
    public function destroy(Empresa $empresa)
    {
        //
    }
}

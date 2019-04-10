<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Empresa;
use App\Entidad;
use App\Ciudad;
use App\Configuracion;
use App\Empleado_empresa;
use App\Pago;
use App\Empleado;
use App\user;
use App\Role_user;
use Illuminate\Http\Request;
use App\Http\Requests\EmpresasRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $empresas = Empresa::search1($request->nit)->orderByDesc('id')->paginate('8');   //Realiza la busqueda por nit



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


    protected function validator(array $data)
    {
        return Validator::make($data, [

            'email' => 'required|string|email|max:255|unique:empresa',

        ]);
    }


    public function store(empresasRequest $request)
    {
        $empresas = new Empresa;
        $user = new User;
        $rol = new Role_user;
        $administracion = Configuracion::Search()->where('codigo', '=', "ADMIN")->first();
        $inscripcion = Configuracion::Search()->where('codigo', '=', "INSCRI")->first();



        $user->name = $request->nombre;
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
        $empresas->email = $request->email;
        $empresas->id_ciudad = $request->id_ciudad;
        $empresas->direccion = $request->direccion;
        $empresas->estado = $request->estado;
        $empresas->beneficio = $request->beneficio;
        if (isset($request->inscripcion)) {
            $empresas->inscripcion = $request->inscripcion;
        } else {
            $empresas->inscripcion = $inscripcion->valor;
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

        $empresas->save();                          //Almacena los datos del objeto empresas

        $empresa = $empresas->id;

        return redirect()->route('empresa.show', compact('empresa'))
            ->with('info', 'La empresa fue creado');
    }


    public function pagocaja($id)
    {

        $cliente = Empresa::find($id);

        $mes = date('m');
        $dia = date('d');
        $empleadoId = auth()->id();

        $pagoc = DB::select('SELECT * FROM pago WHERE id_usuario = ? and mes = ? and tipo = 2', [$cliente->id, $mes]);
        $sede = Empleado::Search()->where('id_usuario','=', $empleadoId )->first();

        if(count($pagoc) == 0){
            $pago = new Pago;
            $pago->id_usuario = $cliente->id;
            $pago->estado = 1;
            $pago->mes = $mes;
            $pago->dia = $dia;
            $pago->tipo = 2;
            if(isset($sede)){
                $pago->id_sede = $sede->id_sede;
            }else{
                $pago->id_sede = 1;
            }
            $pago->total = $cliente->total_pago;
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
        //Busca una ciudad cullo id sea igual al id_ciudad  de la empresa encontrada

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
        $empresas = Empresa::find($id);
        $administracion = Configuracion::Search()->where('codigo', '=', "ADMIN")->first();
        $inscripcion = Configuracion::Search()->where('codigo', '=', "INSCRI")->first();
        $user = $empresas->id_usuario;

        $empresas->nit = $request->nit;
        $empresas->nombre = $request->nombre;
        $empresas->nombre_contacto = $request->nombre_contacto;
        $empresas->telefono_contacto = $request->telefono_contacto;
        $empresas->email = $request->email;
        $empresas->id_ciudad = $request->id_ciudad;
        $empresas->direccion = $request->direccion;
        $empresas->estado = $request->estado;
        $empresas->beneficio = $request->beneficio;
        if (isset($request->inscripcion)) {
            $empresas->inscripcion = $request->inscripcion;
        } else {
            $empresas->inscripcion = $inscripcion->valor;
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

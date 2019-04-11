<?php

namespace App\Http\Controllers;

use App\Empleado_empresa;
use App\Entidad;
use App\Ciudad;
use App\Empresa;
use App\Configuracion;
use Illuminate\Http\Request;
use App\Http\Requests\Empleado_empresaRequest;

class Empleado_empresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $empleadoEmpS = Empleado_empresa::search1($request->identificacion)->orderbydesc('id')->paginate('8');  //Realiza la busqueda por identificacion
        $empresas = Empresa::search()->get();               //Realiza una busqueda de todas las empresas

        return view('empleado_empresa.index', compact('empleadoEmpS', 'empresas'));     //Retorna a la vista index de empleado_empresa junto con la variable empleadoEps y empresas
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        $epss = Entidad::Search()->where('tipo', '=', "1")->get();      //Realiza la busqueda de entidades que tengan tipo = 1
        $arls = Entidad::Search()->where('tipo', '=', "2")->get();      //Realiza la busqueda de entidades que tengan tipo = 2
        $afps = Entidad::Search()->where('tipo', '=', "3")->get();      //Realiza la busqueda de entidades que tengan tipo = 3
        $cajacomps = Entidad::Search()->where('tipo', '=', "4")->get(); //Realiza la busqueda de entidades que tengan tipo = 4
        $ciudades = Ciudad::Search()->get();                            //Realiza la busqueda de todas las ciudades
        $empresas = Empresa::Search()->get();                           //Realiza la busqueda de todas las empresas
        $porcentaje = 10;
        $empresa = null;
        $ciudad = null;
        $eps = null;
        $arl = null;
        $afp = null;
        $cajacomp = null;
        return view('empleado_empresa.create',      //Retorna a la vista create de empleado_empresa
            compact('porcentaje', 'epss', 'arls', 'afps', 'cajacomps', 'ciudades', 'empresas', 'empresa', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp')
             //Retorna a al vista edit de clientes con las variables de porcentaje, cliente, clientes, ciudades, ciudad, epss, arls, afps, cajacomps, eps, arl, afp y cajacomp
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Empleado_empresaRequest $request)
    {
        $empleadoEmpS = new Empleado_empresa;                       //Crea un objeto de tipo empleadoEmpS

        $empleadoEmpS->id_empresa       = $request->id_empresa;
        $empleadoEmpS->identificacion   = $request->identificacion;
        $empleadoEmpS->tipo_id          = $request->tipo_id;
        $empleadoEmpS->nombres          = $request->nombres;
        $empleadoEmpS->apellidos        = $request->apellidos;
        $empleadoEmpS->telefono         = $request->telefono;
        $empleadoEmpS->direccion        = $request->direccion;
        $empleadoEmpS->email            = $request->email;
        $empleadoEmpS->tipo_cliente     = $request->tipo_cliente;
        $empleadoEmpS->fecha_ingreso    = $request->fecha_ingreso;
        $empleadoEmpS->fecha_nacimiento = $request->fecha_nacimiento;
        $empleadoEmpS->salario          = $request->salario;
        $empleadoEmpS->rango            = $request->rango;
        $empleadoEmpS->upc              = $request->upc;
        $empleadoEmpS->id_ciudad        = $request->id_ciudad;
        $empleadoEmpS->id_eps           = $request->id_eps;
        $empleadoEmpS->id_arl           = $request->id_arl;
        $empleadoEmpS->id_afp           = $request->id_afp;
        $empleadoEmpS->id_cjc           = $request->id_cjc;
        $empleadoEmpS->estado           = $request->estado;
        $empleadoEmpS->sercofun         = $request->sercofun;
        $empleadoEmpS->emi              = $request->emi;

        $empleadoEmpS->save();                                      //Almacena los datos del objeto empleadoEmpS

        $empleado = $empleadoEmpS->id;

        return redirect()->route('empleado_empresa.show', compact('empleado'))
            ->with('info', 'El empleado fue creado');
    }


    public function facturacion($id){//id cliente
        $cliente = Empleado_empresa::find($id);
        $empresa = Empresa::search()->where('id', '=', $cliente->id_empresa)->first();

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

        if($empresa->beneficio == 2){
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
        if($cliente->sercofun == 2){
            $sercofun = Configuracion::Search()->where('codigo', '=', "SERCOFUN")->first();
            $serc = $sercofun->valor;
        } else {
            $serc = 0;
        }

        if($cliente->emi == 2 ){
            $emi = Configuracion::Search()->where('codigo', '=', "EMI")->first();
            $emit = $emi->valor;
        } else {
            $emit = 0;
        }

        
        $afpt = $cliente->salario * $afp->valor / 100;
        $upct = $cliente->upc * $upc->valor;

        $total = $serc + $emit + $arlt + $cjct + $epst + $afpt + $upct ;

        $cliente->pago = $total;
        $cliente->save();

        return view('empleado_empresa.facturacion', compact('cliente', 'total', 'epst', 'serc', 'emit', 'arlt', 'cjct', 'afpt', 'upct'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleadoEmp = Empleado_empresa::find($id);                                         //Busca en la base de datos un Empleado_empresa con el id especificado
        $empresa = Empresa::Search()->where('id', '=', $empleadoEmp->id_empresa)->first();  //Realiza la busqueda de empresas que tengan id = al id de la empresa que se retorna al buscar
        $ciudad = Ciudad::Search()->where('id', '=', $empleadoEmp->id_ciudad)->first();     //Realiza la busqueda de empresas que tengan id = al id de la ciudad que se retorna al buscar
        $eps = Entidad::Search()->where('id', '=', $empleadoEmp->id_eps)->first();          //Realiza la busqueda de empresas que tengan id = al id de la eps que se retorna al buscar
        $arl = Entidad::Search()->where('id', '=', $empleadoEmp->id_arl)->first();          //Realiza la busqueda de empresas que tengan id = al id de la arl que se retorna al buscar
        $afp = Entidad::Search()->where('id', '=', $empleadoEmp->id_afp)->first();          //Realiza la busqueda de empresas que tengan id = al id de la afp que se retorna al buscar
        $cajacomp = Entidad::Search()->where('id', '=', $empleadoEmp->id_cjc)->first();     //Realiza la busqueda de empresas que tengan id = al id de la cjc que se retorna al buscar
        return view('empleado_empresa.show', compact('empleadoEmp','empresa', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleadoEmp = Empleado_empresa::find($id);
        $ciudades = Ciudad::Search()->get();
        $empresas = Empresa::search()->get();
        $empresa = Empresa::Search()->where('id', '=', $empleadoEmp->id_empresa)->first();
        $epss = Entidad::Search()->where('tipo', '=', "1")->get();
        $arls = Entidad::Search()->where('tipo', '=', "2")->get();
        $afps = Entidad::Search()->where('tipo', '=', "3")->get();
        $cajacomps = Entidad::Search()->where('tipo', '=', "4")->get();
        $ciudad = Ciudad::Search()->where('id', '=', $empleadoEmp->id_ciudad)->first();
        $eps = Entidad::Search()->where('id', '=', $empleadoEmp->id_eps)->first();
        $arl = Entidad::Search()->where('id', '=', $empleadoEmp->id_arl)->first();
        $afp = Entidad::Search()->where('id', '=', $empleadoEmp->id_afp)->first();
        $cajacomp = Entidad::Search()->where('id', '=', $empleadoEmp->id_cjc)->first();
        $porcentaje = 10;

        return view('empleado_empresa.edit', compact('empleadoEmp', 'ciudad', 'eps', 'arl', 'afp', 'cajacomp', 'ciudades', 'empresas', 'empresa', 'epss', 'arls', 'afps', 'cajacomps', 'porcentaje'));
        //Retorna a la vista edit de empleado_empresa con los datos de empleadoEmp, ciudad, eps, arl, afp, cajacomp, ciudades,empresas, empresa, epss, arls, afps, cajacomps y porcentaje
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleadoEmpS = Empleado_empresa::find($id);                //Busca en la base de datos un Empleado_empresa con el id especificado

        $empleadoEmpS->id_empresa       = $request->id_empresa;
        $empleadoEmpS->identificacion   = $request->identificacion;
        $empleadoEmpS->tipo_id          = $request->tipo_id;
        $empleadoEmpS->nombres          = $request->nombres;
        $empleadoEmpS->apellidos        = $request->apellidos;
        $empleadoEmpS->telefono         = $request->telefono;
        $empleadoEmpS->direccion        = $request->direccion;
        $empleadoEmpS->email            = $request->email;
        $empleadoEmpS->tipo_cliente     = $request->tipo_cliente;
        $empleadoEmpS->fecha_ingreso    = $request->fecha_ingreso;
        $empleadoEmpS->fecha_nacimiento = $request->fecha_nacimiento;
        $empleadoEmpS->salario          = $request->salario;
        $empleadoEmpS->rango            = $request->rango;
        $empleadoEmpS->upc              = $request->upc;
        $empleadoEmpS->id_ciudad        = $request->id_ciudad;
        $empleadoEmpS->id_eps           = $request->id_eps;
        $empleadoEmpS->id_arl           = $request->id_arl;
        $empleadoEmpS->id_arl           = $request->id_afp;
        $empleadoEmpS->id_arl           = $request->id_cjc;
        $empleadoEmpS->id_arl           = $request->estado;

        $empleadoEmpS->save();                                      //Almacena los nuevos datos del objeto empleadoEmpS

        $empleado = $empleadoEmpS->id;

        return redirect()->route('empleado_empresa.show', compact('empleado'))
            ->with('info', 'El empleado fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado_empresa::destroy($id);
        return redirect()->route('empleado_empresa.index')->with('info', 'El empleado fue eliminado');
    }
}

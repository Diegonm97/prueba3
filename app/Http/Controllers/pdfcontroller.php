<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;
use App\Facturacion;
use App\Pago;
use App\Entidad;
use App\Configuracion;
use App\Empleado_empresa;
use App\Empresa;
use Illuminate\Support\Facades\DB;


class pdfcontroller extends Controller
{
    public function imprimir($id)
    {
        $cliente = Clientes::find($id);
        $eps = Configuracion::Search()->where('codigo', '=', "EPS")->first();

        if (isset($cliente->id_arl)) {
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

        if ($cliente->beneficio == 2) {
            if (isset($cliente->id_cjc)) {
                $cjct = $cliente->salario * 4 / 100;
            } else {
                $cjct = 0;
            }
            $epst = $cliente->salario * 4 / 100;
        } else {
            $cjct = 0;
            $epst = $cliente->salario * $eps->valor / 100;
        }

        $upc = Configuracion::Search()->where('codigo', '=', "UPC")->first();
        $iva = Configuracion::Search()->where('codigo', '=', "IVA")->first();
        if ($cliente->sercofun == 2) {
            $sercofun = Configuracion::Search()->where('codigo', '=', "SERCOFUN")->first();
            $serc = $sercofun->valor;
        } else {
            $serc = 0;
        }

        if ($cliente->emi == 2) {
            $emi = Configuracion::Search()->where('codigo', '=', "EMI")->first();
            $emit = $emi->valor;
        } else {
            $emit = 0;
        }


        $afpt = $cliente->salario * $afp->valor / 100;
        $upct = $cliente->upc * $upc->valor;
        $ivainsc = ($cliente->inscripcion * $iva->valor / 100) + $cliente->inscripcion;
        $ivaadmi = ($cliente->administracion * $iva->valor / 100) + $cliente->administracion;

        $total = $serc + $emit + $arlt + $cjct + $epst + $afpt + $upct + $ivaadmi + $ivainsc;

        $cliente->pago = $total;

        $pdf1 = \PDF::loadView('informe.pdf-factura', [
            'cliente' => $cliente, 'total' => $total,
            'epst' => $epst, 'serc' => $serc, 'emit' => $emit, 'arlt' => $arlt,
            'cjct' => $cjct, 'afpt' => $afpt, 'upct' => $upct, 'ivainsc' => $ivainsc, 'ivaadmi' => $ivaadmi
        ]);
        return $pdf1->stream('factura.pdf');
    }

    public function imprimir2($id) //id empleado_emp y empresa
    {
    
        $cliente = Empleado_empresa::find($id);
        $empresa = Empresa::search()->where('id', '=', $cliente->id_empresa)->first();
       
        

        $eps = Configuracion::Search()->where('codigo', '=', "EPS")->first();

        if (isset($cliente->id_arl)) {
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

        if ($empresa->beneficio == 2) {
            if (isset($cliente->id_cjc)) {
                $cjct = $cliente->salario * 4 / 100;
            } else {
                $cjct = 0;
            }
            $epst = $cliente->salario * 4 / 100;
        } else {
            $cjct = 0;
            $epst = $cliente->salario * $eps->valor / 100;
        }

        $upc = Configuracion::Search()->where('codigo', '=', "UPC")->first();
        if ($cliente->sercofun == 1) {
            $sercofun = Configuracion::Search()->where('codigo', '=', "SERCOFUN")->first();
            $serc = $sercofun->valor;
        } else {
            $serc = 0;
        }

        if ($cliente->emi == 1) {
            $emi = Configuracion::Search()->where('codigo', '=', "EMI")->first();
            $emit = $emi->valor;
        } else {
            $emit = 0;
        }


        $afpt = $cliente->salario * $afp->valor / 100;
        $upct = $cliente->upc * $upc->valor;

        $total = $serc + $emit + $arlt + $cjct + $epst + $afpt + $upct;

        $cliente->pago = $total;


        $pdf1 = \PDF::loadView('informe.pdf-factura-empresa-empleado', [
            'cliente' => $cliente, 'total' => $total,
            'epst' => $epst, 'serc' => $serc, 'emit' => $emit, 'arlt' => $arlt,
            'cjct' => $cjct, 'afpt' => $afpt, 'upct' => $upct, 'empresa' => $empresa
        ]);
        return $pdf1->stream('factura-empleado-empresa.pdf');
    }








    public function imprimir3($id) //id empresa
    {   
         $empresa = Empresa::find($id);
        $empleados = Empleado_empresa::Search()->where('id_empresa', '=', $id)->get();

        $epss = Entidad::Search()->where('tipo', '=', "1")->get();      //Realiza la busqueda de entidades que tengan tipo = 1
        $arls = Entidad::Search()->where('tipo', '=', "2")->get();      //Realiza la busqueda de entidades que tengan tipo = 2
        $afps = Entidad::Search()->where('tipo', '=', "3")->get();      //Realiza la busqueda de entidades que tengan tipo = 3
        $cajacomps = Entidad::Search()->where('tipo', '=', "4")->get(); //Realiza la busqueda de entidades que tengan tipo = 4

        $pago_emp = DB::table('empleado_empresa')->where('id_empresa', $empresa->id)->sum('pago');
        $iva = Configuracion::Search()->where('codigo', '=', "IVA")->first();
        $ivainsc = ($empresa->inscripcion * $iva->valor / 100) + $empresa->inscripcion;
        $ivaadmi = ($empresa->administracion * $iva->valor / 100) + $empresa->administracion;

        $total = $pago_emp + $ivaadmi + $ivainsc;
        $empresa->total_pago = $total;



        $pdf1 = \PDF::loadView('informe.pdf-factura-empresa', [
            'empresa' => $empresa, 'total' => $total,
            'ivainsc' => $ivainsc, 'ivaadmi' => $ivaadmi, 'pago_emp' => $pago_emp
            , 'empleados' => $empleados, 'epss' => $epss, 'arls' => $arls
            , 'afps' => $afps, 'cajacomps' => $cajacomps
        ])->setPaper('a4','landscape');
        return $pdf1->stream('factura-empresa.pdf');
    }
}

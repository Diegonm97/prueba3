<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mes = date('m');
        $dia = date('d');
        $pagoscli = DB::select('SELECT * FROM pago WHERE mes = ?', [$mes]);
        $pagosdia = DB::select('SELECT * FROM pago WHERE mes = ? and dia = ?', [$mes, $dia]);
        $clie = array();
        $empr = array();
        $diac = array();
        $diae = array();
        $totalmes = array();
        $totaldia = array();

        foreach ($pagoscli as $cliente) {
            if ($cliente->tipo == 1) {
                $clie[] = $cliente->id_usuario;
                foreach ($clie as $clien) {
                    $pagocli = DB::select('SELECT * FROM cliente WHERE id = ?', [$clien]);
                    $totalmes[] = $pagocli[0]->pago;
                }
            } else {
                $emp[] = $cliente->id_usuario;
                foreach ($emp as $empre) {

                    $pagoemp = DB::select('SELECT * FROM empresa WHERE id = ?', [$empre]);
                    $totalmes[] = $pagoemp[0]->total_pago;
                }
            }
        }

        $total = array_sum($totalmes);

        foreach ($pagosdia as $pago) {
            if ($pago->tipo == 1) {
                $diac[] = $pago->id_usuario;
                foreach ($diac as $dc) {
                    $pagodc = DB::select('SELECT * FROM cliente WHERE id = ?', [$dc]);
                    $totaldia[] = $pagodc[0]->pago;
                }
            } else {
                $diae[] = $pago->id_usuario;
                foreach ($diae as $de) {

                    $pagode = DB::select('SELECT * FROM empresa WHERE id = ?', [$de]);
                    $totaldia[] = $pagode[0]->total_pago;
                }
            }
        }

        $totald = array_sum($totaldia);

        return view('home', compact('total', 'mes', 'totald', 'dia'));
    }
}

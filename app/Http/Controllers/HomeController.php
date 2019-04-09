<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Empresa;
use App\Role_user;
use App\Empleado;

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

        $user = auth()->id();
        $role = Role_user::Search()->where('user_id', '=', $user)->first();

        if ($role->role_id == 1){
            $sedes =  DB::select('SELECT p.id_sede as sede, SUM(p.total) as total_sede FROM `pago` as p, `sede` as s where p.id_sede = s.id and mes = ? GROUP BY p.id_sede', [$mes]);

            $total = DB::select('SELECT SUM(total) as total FROM pago WHERE mes = ?', [$mes]);
            $totalmes = $total[0]->total;
            //dd($totalmes);
            $pagosdia = DB::select('SELECT SUM(total) as total FROM pago WHERE mes = ? and dia = ?', [$mes, $dia]);
            $totaldia = $pagosdia[0]->total;
        }elseif ($role->role_id == 2) {
            $empleado = Empleado::Search()->where('id_usuario', '=', $user)->first();
            //dd($user);

            $total = DB::select('SELECT SUM(total) as total FROM pago WHERE mes = ? and id_sede = ?', [$mes, $empleado->id_sede]);
            $totalmes = $total[0]->total;
            //dd($totalmes);
            $pagosdia = DB::select('SELECT SUM(total) as total FROM pago WHERE mes = ? and dia = ? and id_sede = ?', [$mes, $dia, $empleado->id_sede]);
            $totaldia = $pagosdia[0]->total;

            $sedes =  DB::select('SELECT id_sede, SUM(total) as total_sede FROM pago WHERE mes = ? and id_sede = ? GROUP BY id_sede', [$mes, $empleado->id_sede]);
            
        }else{
            $totalmes = null;
            $totaldia = null;
            $sedes = null;
        }
        

        return view('home', compact('totalmes', 'mes', 'totaldia', 'dia', 'sedes'));
    }
}

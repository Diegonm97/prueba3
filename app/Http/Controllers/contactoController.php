<?php

namespace App\Http\Controllers;
use App\Sede;

use Illuminate\Http\Request;

class contactoController extends Controller
{
    public function index()
    {
        $sedes = Sede::Search()->get();
        //$sede = Sede::Search()->where('id', '=', $sede->id_sede)->first();
        

        return view('contacto', compact('sedes'));
    }
}

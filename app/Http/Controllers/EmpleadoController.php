<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Sede;
use App\User;
use App\Role_user;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate(20);

        return view('empleado.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sedes = Sede::Search()->get();
        $sede = null;
        return view('empleado.create', compact('sedes', 'sede'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Empleado;
        $user = new User;
        $rol = new Role_user;

        $user->name = $request->nombre_completo;
        $user->email = $request->email;
        $user->password = bcrypt('intersalud');
        $user->save();

        $rol->role_id = 2;
        $rol->user_id = $user->id;
        $rol->save();

        $empleado->nombre_completo  = $request->nombre_completo;
        $empleado->estado  = $request->estado;
        $empleado->id_sede  = $request->id_sede;
        $empleado->email = $request->email;
        $empleado->id_usuario = $user->id;

        $empleado->save();

        return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $sedes = Sede::Search()->get();
        $sede = Sede::Search()->where('id', '=', $empleado->id_sede)->first();
        return view('empleado.edit', compact('empleado', 'sede', 'sedes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        $user = $empleado->id_usuario;

        $empleado->nombre_completo  = $request->nombre_completo;
        $empleado->estado  = $request->estado;
        $empleado->id_sede  = $request->id_sede;
        $empleado->email = $request->email;
        $empleado->id_usuario = $user;

        $empleado->save();

        return redirect()->route('empleado.index')->with('info', 'Los datos del empleado fueron actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Configuracion  $configuracion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
        return redirect()->route('entidad.index')->with('info', 'La entidad fue eliminada');
    }
}

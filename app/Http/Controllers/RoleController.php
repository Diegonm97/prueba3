<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(Request $request)
    {   
        
        $roles = Role::paginate();
        
        return view('roles.index', compact('roles'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));   
    }

    public function store(Request $request)
    {
                $roles = new Role;
           
            $roles->name             = $request->name;
            $roles->slug             = $request->slug;
            $roles->description       = $request->description;
            

            $roles->save();

            return redirect()->route('roles.index')
            ->with('info','El role fue creado');
    }


    public function show(Role $role)
    {
        
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role =Role::find($id);
        $permissions = Permission::get();
        return view('roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $roles = Role::find($id);

           
            $roles->name             = $request->name;
            $roles->slug             = $request->slug;
            $roles->description       = $request->description;
            

            $roles->save();

            return redirect()->route('roles.index')
            ->with('info','El rol fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\roles  $roles
     * @return \Illuminate\Http\Response
     */
    public function destroy(roles $roles)
    {
        //
    }
}
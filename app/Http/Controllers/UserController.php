<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Role_user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $users = User::Nombre($request->name)->orderBy('name')->paginate();
        $roles = Role_user::search()->get();

        return view('users.index', compact('users', 'roles'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::get();
        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //Actualizar Usuario
        $user->update($request->all());

        //Actualizar rol
        $user->roles()->sync($request->get('roles'));


        return redirect()->route('users.index', $user->id)
            ->with('info', 'El usuario fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('danger', 'El usuario fue eliminado');
    }
}


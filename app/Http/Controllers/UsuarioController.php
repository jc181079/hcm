<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios=User::paginate(15);
        $usuarios_e = User::onlyTrashed()->get();
        return view('auth.usuarios.index',compact('usuarios', 'usuarios_e'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new User();

        $usuario->ci = $request->input('ci');
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->role = $request->input('role');
        $usuario->status = 'activo';

        $usuario->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        $roles = Role::get();
        return view('auth.usuarios.edit',compact('user','roles'));
    }

    public function update(Request $request, User $user)
    {
        dd($user->roles());
        //actualiza el usuario
        $user->update($request->all());

        //actualiza los roles
        $user->role()->sync($request->get('roles'));

        return redirect()->route('auth.usuarios.index', $user->id)->with('info', 'Usuario actualizado con exito..');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update_status(Request $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->status = 'desactivado';

        $usuario->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = User::find($id);

        $usuario->status = 'eliminado';

        $usuario->delete();
        $usuario->save();

        return back();
    }
}

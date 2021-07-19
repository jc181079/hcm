<?php

namespace App\Http\Controllers;


use \Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role=role::paginate(15);
        //dd($role);
        return view('roles.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        role::create($request->all());
        return back()->with('info', '¡La regla se guardo correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Caffeinated\Shinobi\Models\Role  $reglas
     * @return \Illuminate\Http\Response
     */
    public function show(Role $reglas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\role  $reglas
     * @return \Illuminate\Http\Response
     */
    public function edit(role $role)
    {
        //dd($role);
        $permissions = Permission::get();
        //$role = role::get();
        //dd($role);
        return view('roles.edit', compact('role','permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Caffeinated\Shinobi\Models\Role  $reglas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
         //actualiza un role
        $role->update($request->all());

        //actualiza los permisos
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index', $role->id)->with('info', 'Role actualizado con exito..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Caffeinated\Shinobi\Models\Role  $reglas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('info', 'Roles eliminado correctamente...');
    }
}

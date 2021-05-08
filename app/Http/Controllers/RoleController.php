<?php

namespace App\Http\Controllers;


//use \Caffeinated\Shinobi\Models\Role;
use App\role;
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
        return view('roles.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
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
    public function edit(role $reglas)
    {
        dd($reglas);
        //return view('roles.edit', compact('reglas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Caffeinated\Shinobi\Models\Role  $reglas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $reglas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Caffeinated\Shinobi\Models\Role  $reglas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $reglas)
    {
        //
    }
}

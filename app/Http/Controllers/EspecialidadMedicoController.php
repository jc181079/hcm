<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\especialidad_medico;

class EspecialidadMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especialidad_medico = especialidad_medico::all();

        return view('especialidades_m.index', compact('especialidad_medico'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especialidad_medico = new especialidad_medico();

        $especialidad_medico->nom_especialidad = $request->input('nom_especialidad');

        $especialidad_medico->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\especialidad_medico  $especialidad_medico
     * @return \Illuminate\Http\Response
     */
    public function show(especialidad_medico $especialidad_medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\especialidad_medico  $especialidad_medico
     * @return \Illuminate\Http\Response
     */
    public function edit(especialidad_medico $especialidad_medico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\especialidad_medico  $especialidad_medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, especialidad_medico $especialidad_medico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\especialidad_medico  $especialidad_medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(especialidad_medico $especialidad_medico)
    {
        //
    }
}

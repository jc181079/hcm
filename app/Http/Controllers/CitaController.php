<?php

namespace App\Http\Controllers;

use App\cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $cita=new cita;
        $cita->fecha_cita             = $request->input('fecha_cita');
        $cita->clinica_municipio_id   = $request->input('clinica_municipio_id');
        $cita->especialidad_medico_id = $request->input('especialidad_medico_id');
        $cita->medico_id              = $request->input('medico_id'); 
        $cita->ci_beneficiario        = $request->input('ci_beneficiario');
        $cita->dolencia_descripcion   = $request->input('dolencia_descripcion');
        $cita->estatus_cita           = $request->input('estatus_cita');
        $cita->pre_compromiso         = $request->input('pre_compromiso');
        $cita->save();

        Session::flash("message","!! Se registro correctamente la cita para ".$cita->fecha_cita." ");

        return back();
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(cita $cita)
    {
        //
    }
}

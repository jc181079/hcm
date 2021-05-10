<?php

namespace App\Http\Controllers;

use App\clinica;
use App\estado;
use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clinica=clinica::paginate(10);
        return view('clinicas.index',compact('clinica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado=estado::pluck('nom_estado','id_estado')->toArray();
        return view('clinicas.create',compact('estado'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function show(clinica $clinica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function edit(clinica $clinica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, clinica $clinica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function destroy(clinica $clinica)
    {
        //
    }
}

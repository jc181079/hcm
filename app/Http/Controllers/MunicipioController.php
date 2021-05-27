<?php

namespace App\Http\Controllers;

use App\municipio;
use App\estado;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipio=municipio::join('estados','estados.id_estado','=','municipios.estado_id')
        ->select('municipios.id_municipio','nom_municipio','estados.nom_estado')->get();
        
        return view('municipios.index',compact('municipio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado=estado::pluck('nom_estado','id_estado')->toArray();
        return view('municipios.create',compact('estado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        municipio::create($request->all());
        return back()->with('info', '¡El municipio se guardo correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function show(municipio $municipio)
    {
        $municipio=municipio::join('estados','estados.id_estado','=','municipios.estado_id')
        ->select('municipios.id_municipio','nom_municipio','estados.nom_estado')
        ->get();
        //print_r($municipio);
        //dd($municipio);
        return view('municipios.show',compact('municipio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function edit(municipio $municipio)
    {
        $estado=estado::pluck('nom_estado','id_estado')->toArray();
        $municipio=municipio::join('estados','estados.id_estado','=','municipios.estado_id')
        ->select('municipios.id_municipio','nom_municipio','estados.nom_estado')
        ->get();
        return view('municipios.edit',compact('estado','municipio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, municipio $municipio)
    {
        municipio::where('id_municipio',$municipio->id_municipio)->update($request->all());
        return redirect()->route('municipios.index')
        ->with('info','¡El municipio se actualizo correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\municipio  $municipio
     * @return \Illuminate\Http\Response
     */
    public function destroy(municipio $municipio)
    {
        //
    }

   
}

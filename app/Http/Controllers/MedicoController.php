<?php

namespace App\Http\Controllers;

use App\medico;
use App\medicos_especialidad_honorario;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = medico::orderBy('id_medico')-> paginate(6);;

        return view('medicos.index',compact('medicos'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_medico' => 'required',
            'ci_medico' => 'required',
            'rif_medico' => 'required',
            'tlf_medico' => 'required',
            'correo_medico' => 'required',

        ]);
        
        medico::create($request->all());

        Session::flash("message","Registro correctamente");
        return redirect()->route('medicos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit(medico $medico)
    {
        
        return view('medicos.edit',compact('medico'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medico $medico)
    {
        
        $request->validate([

            'nom_medico' => 'required',
            'ci_medico' => 'required',
            'rif_medico' => 'required',
            'tlf_medico' => 'required',
            'correo_medico' => 'required',

        ]);
        
        $medico->update($request->all());

        Session::flash("message","Actulizado correctamente");
        return redirect()->route('medicos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(medico $medico)
    {
        $medico->delete();

        return redirect()->route('medicos.index');
    }
}

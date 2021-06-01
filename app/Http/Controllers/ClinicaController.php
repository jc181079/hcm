<?php

namespace App\Http\Controllers;

use App\clinica;
use App\estado;
use App\municipio;
use App\clinicas_municipio;
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
        $clinica  = clinica::where('rif_clinica','=',$request->rif_clinica)->select('rif_clinica')->get();
        $tipo     = ''; // Tipo es la variable con la cual se le dice  a la interfaz como se va a mostrar el mensaje
        $mensaje  = '';
        /**
         * 
         * con este condicional se esta evitando la duplicacion de informacion con respecto al rif
         * 
         */

        if (isset($clinica[0]->rif_clinica)){
            if ($clinica[0]->rif_clinica = $request->rif_clinica){
                $tipo    = 'warning';
                $mensaje = '¡El RIF '.$request->rif_clinica." ya se encuentra registrado en la base de datos, revise la informacion que desea ingresar";            
            }      
        }else{
            clinica::create($request->all());
            $tipo    = 'info';
            $mensaje = "Se guardo correctamente la ".$request->nom_clinica." de RIF ".$request->rif_clinica." en la base de datos";
        }       
        return back()->with($tipo, $mensaje);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function show(clinica $clinica, Request $request)
    {
        //$xclinica= clinica::select('clinicas.*','municipios.nom_municipio','estados.nom_estado')
        //                    ->where('id_clinicas','=',$clinica->id_clinicas)
        //                    ->get();
                            //->toSql(); //para mostrar el sql generado en pantalla
        //printf($clinica);
        $estado = estado::pluck('nom_estado','id_estado')->toArray();
        $climun = clinicas_municipio::join('municipios','municipios.id_municipio','=','clinicas_municipios.municipio_id')
                                        ->join('estados','estados.id_estado','=','clinicas_municipios.estado_id')
                                        ->select('estados.nom_estado','municipios.nom_municipio','clinicas_municipios.*')
                                        ->get();

        return view('clinicas.show', compact('clinica','estado','climun'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\clinica  $clinica
     * @return \Illuminate\Http\Response
     */
    public function edit(clinica $clinica)
    {
        return view('clinicas.edit',compact('clinica'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipio;
use App\medicos_especialidad_honorario;

class jqueryController extends Controller
{
    public function getMunicipios(Request $request)
    {
        /**
         * 
         */
        $municipioArray[0]='Seleccione...'.$request->estado_id;
        if ($request->ajax()){
             $municipio = municipio::where('estado_id',$request->estado_id)->get();
             foreach($municipio as $municipios){
                 $municipioArray[$municipios->id_municipio]= $municipios->nom_municipio;
             }
                      
        }
        return $municipioArray;
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getMedicoEspecialidad(Request $request)
    {
        /**
         * el error es que no se esta mandando la informacion por medio de ajax
         * la variable request esta vacia
         */
       
        $medicoArray[0]="seleccione..";
 
        if ($request->ajax()){
             $medico = medicos_especialidad_honorario::join('medicos','medicos.id_medico','=','medicos_especialidad_honorarios.medico_id')
             ->select('medicos.id_medico','medicos.nom_medico')
             ->where('medicos_especialidad_honorarios.especialidad_id','=',$request->especialidad_medico)->get();
             foreach($medico as $medicos){
                 $medicoArray[$medicos->id_medico]= $medicos->nom_medico;
             }
                      
        }
        return $medicoArray;
    }

    public function getClinicaMedico(Request $request)
    {
        /**
         * 
         */
        $clinicaArray[0]='Seleccione...';
        if ($request->ajax()){
            
            $clinica = clinicas_medicos_horario::join('clinicas c','c.id_clinica','=','clinicas_medicos_horarios.clinica_id')
             ->join('medicos_especialidad_honorarios meh', 'meh.especialidad_id=',$request->especialidad_id)
             ->select('clinicas_medicos_horarios.clinica_id','c.nom_clinica')->get();
             foreach($clinica as $clinicas){
                 $clinicaArray[$clinicas->clinica_id]= $clinicas->nom_clinica;
             }
                      
        }
        return $medicoArray;
    }
}

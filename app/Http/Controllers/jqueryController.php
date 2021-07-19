<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipio;
use App\medicos_especialidad_honorario;
use App\clinicas_medicos_horario;

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
       
        $medicoArray[0]="seleccione..".$request->medico_id;
 
        if ($request->ajax()){
             $medico = medicos_especialidad_honorario::join('medicos','medicos.id_medico','=','medicos_especialidad_honorarios.medico_id')
             ->select('medicos.id_medico','medicos.nom_medico')
             ->where('medicos_especialidad_honorarios.especialidad_id','=',$request->especialidad_id)->get();
             foreach($medico as $medicos){
                 $medicoArray[$medicos->id_medico]= $medicos->nom_medico;
             }
                      
        }
        return $medicoArray;
    }


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function getClinica(Request $request)
    {
        /**
         * 
         */
        
        $clinicaArray[0]='Seleccione...'.$request->medico_id;
        if ($request->ajax()){
            
            echo $clinica = clinicas_medicos_horario::join('clinicas','clinicas.id_clinicas','=','clinicas_medicos_horarios.clinica_id')
                                               ->join('clinicas_municipios','clinicas_municipios.clinica_id','=','clinicas.id_clinicas')
                                               ->join('medicos_especialidad_honorarios', 'medicos_especialidad_honorarios.especialidad_id','=','clinicas_medicos_horarios.medico_especialidades_id')
                                               ->where('medicos_especialidad_honorarios.especialidad_id','=',$request->input('especialidad_id'))
                                               ->select('clinicas_municipios.id_clinica_municipio','clinicas.nom_clinica')->toSql();
             foreach($clinica as $clinicas){
                 $clinicaArray[$clinicas->clinica_id]= $clinicas->nom_clinica;
             }
                      
        }
        return $clinicaArray;
    }
}

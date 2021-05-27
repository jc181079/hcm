<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\municipio;

class jqueryController extends Controller
{
    public function getMunicipios(Request $request)
    {
        /**
         * 
         */
        $municipioArray[0]='Seleccione...';
        if ($request->ajax()){
             $municipio = municipio::where('estado_id',$request->estado_id)->get();
             foreach($municipio as $municipios){
                 $municipioArray[$municipios->id_municipio]= $municipios->nom_municipio;
             }
                      
        }
        return $municipioArray;
    }
}

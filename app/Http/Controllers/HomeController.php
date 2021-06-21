<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleados;
use App\estado;
use App\carga_familiar;
use App\especialidad_medico;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $empleado=empleados::where('ci_empleado',$request->user()->ci)
        ->select('nom_empleado','ape_empleado','sexo_empleado','ec_empleado','ci_empleado','edad_empleado')->get();
        
        $cargaFamiliar=carga_familiar::where('empleado_id',$request->user()->id)
        ->select('nom_pariente','ape_pariente','sexo_pariente','ec_pariente','ci_pariente','edad_pariente','parentesco')->get();
        //dd($empleado);

        $especialidad_medico=especialidad_medico::pluck('nom_especialidad','id_especialidad')->toArray();
        
        $estado_id=estado::pluck('nom_estado','id_estado')->toArray();

        

        
        
        return view('home',compact('empleado','cargaFamiliar','especialidad_medico', 'estado_id'));

        
    }
}

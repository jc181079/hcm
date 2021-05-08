<?php

namespace App\Http\Controllers;

use App\estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estado=estado::paginate(10);
        return view('estados.index',compact('estado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estado = estado::paginate(10);
        //dd($estado);
        if ($estado){
            $estadosNuevos=['Bolivar','Angostura','Miranda','Zulia','Barinas','Merida','Sucre','Amazonas','Cojedes','Apure',
            'Aragua','Carabobo','Delta Amacuro','Falcon','Distrito capital','Guarico','Lara','Merida','Monagas','Nueva esparta',
            'Portuguesa','Tachira','Trujillo','Vargas','Yaracuy'
            ];
            foreach ($estadosNuevos as $estados) {
                estado::create(['nom_estado'=>$estados,'updated_at'=>'','created_at']);
            }
            return back()->with('info', '¡Los estados se guardaron correctamente!');

        }else{
            return back()->with('info', '¡Los estados ya se crearon!');
        }
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
     * @param  \App\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function show(estado $estado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function edit(estado $estado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estado $estado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estado  $estado
     * @return \Illuminate\Http\Response
     */
    public function destroy(estado $estado)
    {
        //
    }
}

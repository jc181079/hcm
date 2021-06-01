@extends("medicos.layout")

@section("content")

<hr>

<h1 class="text-center">Registro</h1>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div class="form-group">
                <form action="{{ route('medicos.update',$medico->id_medico)}}" method="post">
                    @csrf 
                    @method("PUT")          
          

                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                        <input name='nom_medico' value="{{$medico->nom_medico}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                        <input name='tlf_medico' value="{{$medico->tlf_medico}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Rif</span>
                        <input name='rif_medico' value="{{$medico->rif_medico}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Cedula</span>
                        <input name='ci_medico' value="{{$medico->ci_medico}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Correo Electronico</span>
                        <input name='correo_medico' value="{{$medico->correo_medico}}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div> 
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <input type="button" class="btn btn-primary" onclick="history.back()" name="volver atrás" value="Regresar">
                    </div>

                </form>
            
            </div>
        </div>    
    </div>
</div>




@endsection
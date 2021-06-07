@extends("layouts.dashboard")

@section("content")
<hr>

<h1 class="text-center">Registro</h1>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-4">
            <div class="form-group">
                <form action="{{ route('medicos.store')}}" method="post">
                    @csrf 
                    
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nombre</span>
                        <input name='nom_medico'class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
                        <input name='tlf_medico'class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Rif</span>
                        <input name='rif_medico'class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Cedula</span>
                        <input name='ci_medico'class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Correo Electronico</span>
                        <input name='correo_medico'class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
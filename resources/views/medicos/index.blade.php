@extends("medicos.layout")

@section("content")

<h1 class="text-center">Medicos</h1>

<div class="container">

<a href="{{ route('medicos.create')}}" class ="btn btn-primary">Agregar</a>

  <table class="table caption-top">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre de Medico</th>
        <th scope="col">Tlf</th>
        <th scope="col">Rif</th>
        <th scope="col">Cedula</th>
        <th scope="col">Correo Electronico</th>

      </tr>
    </thead>
    <tbody>
      @foreach($medicos as $medico)
            <tr>
            <th scope="row">{{ $medico->id_medico}}</th>
            <td>{{ $medico->nom_medico}}</td>
            <td>{{ $medico->ci_medico}}</td>
            <td>{{ $medico->rif_medico}}</td>
            <td>{{ $medico->tlf_medico}}</td>
            <td>{{ $medico->correo_medico}}</td>

            <td><a class="btn btn-info" href="{{ route('medicos.edit', $medico->id_medico) }}">Editar</a>
                <form action="{{route('medicos.destroy', $medico->id_medico)}}"  class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')

                <button type="submit" class="btn btn-danger" onclick="return confirm('Quiere borrar el registro')">Borrar</button>
                </form>
            </td>
            </tr>
        @endforeach

    </tbody>
    </table>

{{ $medicos->links() }}   
    
</div>

    
@endsection
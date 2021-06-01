<!-- /.box-header -->
<div class="box-body" id='resultado'>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
	            <th>Nombre de la Especialidad</th>
	            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($especialidad_medico as $e_m)
            <tr>
                <td>{{ $e_m->nom_especialidad }}</td>
                <td><a href="" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                	<a href="" class="btn btn-success"><i class="fa fa-bloc"></i></a>
                	<a href="" class="btn btn-danger"><i class="fa fa-trahs"></i></a>
                </td>                                                        
            </tr>
            @endforeach                              
        </tbody>
	</table>
</div>
<!-- /.box-body -->

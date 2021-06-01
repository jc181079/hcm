<!-- /.box-header -->
<div class="box-body" id='resultado'>
    <table id="example2" class="table table-bordered table-hover">
        <thead>
            <tr>
	            <th>Nombre de los Examenes</th>
	            <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        	@foreach($ex_lab as $e_l)
            <tr>
                <td>{{ $e_l->nom_examen }}</td>
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

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Clinicas</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                    <h3 class="box-title"><a href="{{ route('clinicas.create')}}" class="btn btn-success">Registrar nueva clinica</a></h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Clinica</th>
                                                    <th>Rif</th>
                                                    <th colspan="3">Acciones</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($clinica as $clinicas)
                                                    <tr>
                                                        <td>{{$clinicas->nom_clinica}}</td>                                                       
                                                        <td>{{$clinicas->rif_clinica}}</td>
                                                        <td><a href="{{route('clinicas.show',$clinicas->id_clinicas)}}"><i class="fa fa-circle-o"></i> Consultar </a></td>
                                                        <td><a href="{{route('clinicas.edit',$clinicas->id_clinicas)}}"><i class="fa fa-circle-o"></i> Editar </a></td>
                                                        <td><a href="{{route('clinicas.destroy',$clinicas->id_clinicas)}}"><i class="fa fa-circle-o"></i> Eliminar </a></td>
                                                    </tr>
                                                @endforeach                                    
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="5">{{ $clinica->links() }}</th>                                                   
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                <!-- /.box-body -->
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
    </div> <!-- /.row -->
    
</div>
@endsection

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Municipios de Venezuela</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                    <h3 class="box-title"><a href="{{ route('municipios.create')}}" class="btn btn-success">Nuevo Municipio</a></h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Estado</th>
                                                    <th colspan="3">Acciones</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($municipio as $municipios)
                                                    <tr>
                                                        <td>{{$municipios->nom_municipio}}</td>
                                                        <td>{{$municipios->nom_estado}}</td>
                                                        <td><a href="{{route('municipios.show',$municipios->id_municipio)}}"><i class="fa fa-circle-o"></i> Consultar </a></td>
                                                        <td><a href="{{route('municipios.edit',$municipios->id_municipio)}}"><i class="fa fa-circle-o"></i> Editar </a></td>
                                                        <td><a href="{{route('municipios.destroy',$municipios->id_municipio)}}"><i class="fa fa-circle-o"></i> Eliminar </a></td>                                                        
                                                    </tr>
                                                @endforeach                                    
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Municipio</th>
                                                    <th>Estado</th>
                                                    <th colspan="3">Acciones</th>                                                    
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
    <div id='example' >xxx</div>
</div>
@endsection

@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Usuarios</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Lista de usuarios del sistema</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Cedula</th>
                                                    <th>Acciones</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($usuarios as $usu)
                                                    <tr>
                                                        <td>{{$usu->name}}</td>
                                                        <td>{{$usu->email}}</td>
                                                        <td>{{$usu->ci}}</td>
                                                        <td><a href="{{route('usuarios.index')}}"><i class="fa fa-circle-o"></i> Permisos </a></td>                                                        
                                                    </tr>
                                                @endforeach                                    
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Cedula</th>
                                                    <th>Acciones</th>                                                    
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

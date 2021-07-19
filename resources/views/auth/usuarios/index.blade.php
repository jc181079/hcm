@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-11">
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
                                        <h3 class="box-title">
                                            Lista de usuarios del sistema
                                        </h3>
                                        <a href="/crear_usuarios" class="btn btn-info pull-right">
                                            <i class="fa fa-plus"></i> Nuevo
                                        </a>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Cedula</th>
                                                    <th>Estatus</th>
                                                    <th>Role</th>
                                                    <th>Acciones</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($usuarios as $user)
                                                    <tr>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->ci}}</td>
                                                        <td>{{$user->role_type}}</td>
                                                        <td>
                                                        @if($user->status == 'activo')
                                                            <span class="label label-success">{{$user->status}}
                                                            </span>
                                                        @else($user->stutus)
                                                        <span class="label label-warning">{{$user->status}}
                                                            </span>
                                                        @endif
                                                        </td>
                                                        <td>
                                                        @if($user->status == 'desactivado')
                                                        <a href="#" class="btn btn-success">
                                                                <i class="fa fa-refresh"></i> 
                                                            </a>
                                                        @else
                                                            <a href="#">
                                                                <i class="fa fa-circle-o"></i> Permisos
                                                            </a>
                                                            <a href="{{route('auth.usuarios.edit', $user->id)}}" title="editar" class="btn btn-primary">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            <a title="desactivar" class="btn btn-info" href="usuarios/{{ $user->id }}/desactivar">
                                                                <i class="fa fa-close"></i>
                                                            </a>
                                                            <a title="eliminar" class="btn btn-danger" href="usuarios/{{ $user->id }}/eliminar">
                                                                <i class="fa fa-trash"></i>
                                                            </a>
                                                            @endif
                                                        </td>                                                        
                                                    </tr>
                                                @endforeach                                    
                                            </tbody>
                                        </table>
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="6">
                                                        <h3 class="box-title">
                                                        Lista de usuarios eliminados
                                                        </h3>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Cedula</th>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Estatus</th>
                                                    <th>Role</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach($usuarios_e as $u_e)
                                                <tr>
                                                    <td>{{$u_e->ci}}</td>
                                                    <td>{{$u_e->name}}</td>
                                                    <td>{{$u_e->email}}</td>
                                                    <td>{{$u_e->ci}}</td>
                                                    <td>{{$u_e->role_type}}</td>
                                                    <td>
                                                        <span class="label label-danger">
                                                        {{ $u_e->status}}
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
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

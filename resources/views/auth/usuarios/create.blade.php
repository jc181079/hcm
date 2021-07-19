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
                                            Crear nuevos usuarios
                                        </h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="ci" placeholder="Ingrese Nº cedula">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" placeholder="Ingrese nombre y apellido">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control" placeholder="Ingrese correo">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control" placeholder="Ingrese clave">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="role">
                                                    <option value="0">Administrador</option>
                                                    <option value="1">Medico</option>
                                                    <option value="2">Empleado</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar</button>
                                        </form>
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
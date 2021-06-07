@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    @foreach ($empleado as $emp)
                        <img class="profile-user-img img-responsive img-circle" src="{{asset('dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                        <h3 class="profile-username text-center">{{ $emp->nom_empleado}} {{$emp->ape_empleado }}</h3>
                        <p class="text-muted text-center">{{ $emp->ci_empleado }}</p> 
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                            <b>Sexo</b> <a class="pull-right">{{ $emp->sexo_empleado }}</a>
                            </li>
                            <li class="list-group-item">
                            <b>Estado Civil</b> <a class="pull-right">{{ $emp->ec_empleado }}</a>
                            </li>
                            <li class="list-group-item">
                            <b>Edad</b> <a class="pull-right">{{ $emp->edad_empleado }}</a>
                            </li>
                        </ul>
                    @endforeach
                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                </div>
            </div>
          <!-- /.box -->

          <!-- About Me Box -->
            
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Carga Familiar</a></li>
              <li><a href="#timeline" data-toggle="tab">Citas</a></li>
              <li><a href="#settings" data-toggle="tab">Monedero</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Lista de beneficiarios</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nombre completo</th>
                                                    <th>Cedula</th>
                                                    <th>Edad</th>
                                                    <th>Sexo</th>
                                                    <th>Parentesco</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($cargaFamiliar as $cf)
                                                    <tr>
                                                        <td>{{$cf->nom_pariente}} {{$cf->ape_pariente}}</td>
                                                        <td>{{$cf->ci_pariente}}
                                                        </td>
                                                        <td>{{$cf->edad_pariente}}</td>
                                                        <td>{{$cf->sexo_pariente}}</td>
                                                        <td>{{$cf->parentesco}}</td>
                                                    </tr>
                                                @endforeach                                    
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nombre completo</th>
                                                    <th>Cedula</th>
                                                    <th>Edad</th>
                                                    <th>Sexo</th>
                                                    <th>Parentesco</th>
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
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                {!! Form::open(['route'=>'citas.store','id'=>'Form1','class'=>'form-inline']) !!}

                    <div class="form-group">
                        {{ Form::label('Fecha_cita','Fecha de la cita medica:') }}
                        {{ Form::date('fecha_cita', \Carbon\Carbon::now(), ['class'=>'form-control']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('especialidad_medico','Especialidad Medica:') }}
                        {{ Form::select('especialidad_medico', $especialidad_medico, ['class'=>'form-control']) }}
                    </div>

                    <div class="row">
                        <div class="col"><button class="btn" type="submit">Guardar</button></div>
                    </div>
                {!! Form::close() !!}
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-inline">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</div>
@endsection


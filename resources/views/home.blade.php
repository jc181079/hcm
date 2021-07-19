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
                  <fieldset>
                    <legend>Ubicacion geografica de la cita</legend>
                    <div class="form-group">
                        {{ Form::label('estado_id','Estado:',['class'=>'col-sm-6 control-label']) }}
                        <div class="col-sm-10">
                          {{ Form::select('estado_id', $estado_id, null, ['class'=>'form-control', 'placeholder'=>'Seleccione']) }}
                        </div>
                    </div>
                  
                    <div class="form-group">
                      {{ Form::label('municipio_id','Municipio:',['class'=>'col-sm-6 control-label']) }}
                      <div class="col-sm-10">
                        {{ Form::select('municipio_id',['N/A' => 'Seleccione'], null,['class'=>'form-control']) }}
                      </div>
                    </div> 
                  </fieldset>
                  <fieldset>
                    <legend>Especialista</legend>
                    <div class="form-group">
                        {{ Form::label('especialidad_id','Especialidad:',['class'=>'col-sm-6 control-label']) }}
                        <div class="col-sm-10">
                          {{ Form::select('especialidad_id', $especialidad_medico, null, ['class'=>'form-control','placeholder'=>'Seleccione']) }}
                        </div>
                    </div>
                    <div class="form-group">
                      {{ Form::label('medico_id','medico:',['class'=>'col-sm-6 control-label']) }}
                      <div class="col-sm-10">
                        {{ Form::select('medico_id', ['N/A' => 'Seleccione'], null, ['class'=>'form-control']) }}
                      </div>
                    </div>
                    <div class="form-group">
                      {{ Form::label('ci_beneficiario','Cedula Paciente:',['class'=>'col-sm-6 control-label']) }}
                      <div class="col-sm-10">
                        {{ Form::text('ci_beneficiario', null, ['class'=>'form-control']) }}
                      </div>
                    </div>
                    <div class="form-group">
                      {{ Form::label('dolencia_descripcion','Dolencia:',['class'=>'col-sm-6 control-label']) }}
                      <div class="col-sm-10">
                        {{ Form::text('dolencia_descripcion', null, ['class'=>'form-control']) }}
                      </div>
                    </div>
                  </fieldset>
                  <fieldset>
                    <legend>Lugar y fecha</legend> 
                    <div class="form-group">
                      {{ Form::label('Fecha_cita','Fecha:',['class'=>'col-sm-6 control-label']) }}
                      <div class="col-sm-10">
                        {{ Form::date('fecha_cita', \Carbon\Carbon::now(), ['class'=>'form-control']) }}
                      </div>
                    </div>
                    <div class="form-group">
                      {{ Form::label('clinica_id','Clinica:',['class'=>'col-sm-6 control-label']) }}
                      <div class="col-sm-10">
                        {{ Form::select('clinica_municipio_id', ['N/A' => 'Seleccione'], null, ['class'=>'form-control','id'=>'clinica_municipio_id']) }}
                      </div>
                    </div>
                    <div class="form-group">
                      
                      <div class="col-sm-10">
                        {{ Form::hidden('estatus_cita', 'Solicitada', ['class'=>'form-control']) }}
                      </div>
                    </div>
                  </fieldset>
                    <div class="box">
                        <div class="box-body"><button class="btn btn-success btn-block" type="submit">Apartar cita</button></div>
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
<script>
  $(document).ready(function(){
      // inicio estado municipio
      $('#estado_id').on('change', function() {
          $.ajax({

              url: '{{ route('getMunicipios')}}',
              method: 'POST',
              id_estado: $(this).val(),
              data: $('#Form1').serialize()                                    

          }).done(function(res){

              $('#municipio_id').empty();
              $.each(res, function(index, value){
                  console.log("<option value='" +index+ "'>"+value+"</option>");
                  $('#municipio_id').append("<option value='" +index+ "'>"+value+"</option>");
              });

          });
      });
      //fin estado municipio

      //inicio especialidad medico
      $('#especialidad_id').on('change', function() {        
          $.ajax({
             
              url: '{{ route('getMedicoEspecialidad')}}',
              method: 'POST',
              id_especialidad: $(this).val(),
              data: $('#Form1').serialize()     
              //el error al parecer es que no esta enviando el dato                               

          }).done(function(res){
                       
              $('#medico_id').empty();
              $.each(res, function(index, value){
                  console.log("<option value='" +index+ "'>"+value+"</option>");
                  $('#medico_id').append("<option value='" +index+ "'>"+value+"</option>");
              });
          });
      });

      //inicio clinica se va a llenar en virtud al medico que se haya seleccionado
      $('#medico_id').on('change', function() {      
          console.log(" valor medico" +$(this).val()+" ");
          $.ajax({
             
             url: '{{ route('getClinica')}}',
             method: 'POST',
             id_especialidad: $(this).val(),
             data: $('#Form1').serialize()     
             //el error al parecer es que no esta enviando el dato                               

         }).done(function(res){
                       
              $('#clinica_municipio_id').empty();
              $.each(res, function(index, value){
                  console.log("<option value='" +index+ "'>"+value+"</option>");
                  $('#clinica_municipio_id').append("<option value='" +index+ "'>"+value+"</option>");
              });
          });
      });
  });
</script>
@endsection


@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Modificar</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Clinicas</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {!! Form::model($clinica,['route'=>['clinicas.update',$clinica->id_clinicas]]) !!}
                                                <div class="form-group">
                                                    {{ Form::label('rif_clinica','Rif:') }}
                                                    {{ Form::text('rif_clinica', null, ['class'=>'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('nom_clinica','Nombre de la clinica:') }}
                                                    {{ Form::text('nom_clinica', null, ['class'=>'form-control']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('dir_clinica','Direccion de la clinica:') }}
                                                    {{ Form::textarea('dir_clinica', null,['class'=>'form-control','placeholder' => 'Direccion de la clinica']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('tlf_clinica','Telefono de la clinica:') }}
                                                    {{ Form::text('tlf_clinica', null,['class'=>'form-control','placeholder' => 'Telefono de la clinica']) }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('correo_clinica','Correo electronico de la clinica:') }}
                                                    {{ Form::email('correo_clinica', null,['class'=>'form-control','placeholder' => 'Correo de la clinica']) }}
                                                </div>
                                                <div class="row">
                                                    <div class="col"><a href="{{ route('clinicas.index')}}" class="btn btn-danger">Cancelar</a></div>
                                                    <div class="col"><button class="btn" type="submit">Guardar</button></div>
                                                </div>
                                                @method('PUT')
                                        {!! Form::close() !!}
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
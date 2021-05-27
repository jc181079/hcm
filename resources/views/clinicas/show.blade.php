@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Clinica</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Consulta</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        @foreach ($xclinica as $clinicas)
                                            <div class="form-group">
                                                {{ Form::label('rif_clinica','RIF de la Clinica:') }}
                                                {{ $clinicas->rif_clinica }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('nom_municipio','Nombre de la clinica:') }}
                                                {{ $clinicas->nom_clinica }}
                                            </div>                                      
                                            <div class="form-group">
                                                {{ Form::label('estado','Estado:') }}
                                                {{ $clinicas->nom_estado }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('nom_municipio','Municipio:') }}
                                                {{ $clinicas->nom_municipio }}
                                            </div>               
                                            <div class="form-group">
                                                {{ Form::label('dir_clinica','Direccion fiscal:') }}
                                                {{ $clinicas->dir_clinica }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('tlf_contacto','Telefono de Contacto:') }}
                                                {{ $clinicas->tlf_clinica }}
                                            </div>               
                                            <div class="form-group">
                                                {{ Form::label('correo_clinica','Correo electronico:') }}
                                                {{ $clinicas->correo_clinica }}
                                            </div>                                                        
                                        @endforeach
                                        <div class="row">
                                            <div class="col"><a href="{{ route('municipios.index')}}" class="btn  inline">Volver</a></div>
                                        </div>
                                        
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
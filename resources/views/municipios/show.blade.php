@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Municipios</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Consulta de Municipio</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        @foreach ($municipio as $mun)
                                            <div class="form-group">
                                                {{ Form::label('nom_estado','Estado:') }}
                                                {{ $mun->nom_estado }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('nom_municipio','Nombre del municipio:') }}
                                                {{ $mun->nom_municipio }}
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
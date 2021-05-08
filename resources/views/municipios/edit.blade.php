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
                                        <h3 class="box-title">Nuevo Municipio</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        @foreach ($municipio as $mun)
                                            {!! Form::model($mun,['route'=>['municipios.update',$mun->id_municipio],'method'=>'PUT']) !!}
                                            <div class="form-group">
                                                {{ Form::label('estado_id','Estado:') }}
                                                {{ Form::select('estado_id', $estado, null,['class'=>'form-control']) }}
                                            </div>
                                            <div class="form-group">
                                                {{ Form::label('nom_municipio','Nombre del municipio:') }}
                                                {{ Form::text('nom_municipio', null, ['class'=>'form-control']) }}
                                            </div>                                      
                                            <div class="row">
                                                <div class="col"><a href="{{ route('municipios.index')}}" class="btn btn-danger inline">Cancelar</a></div>
                                                <div class="col"><button class="btn btn-primary inline" type="submit">Guardar</button></div>
                                            </div>
                                            {!! Form::close() !!}
                                        @endforeach
                                        
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
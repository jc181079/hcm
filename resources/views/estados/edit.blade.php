@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Reglas</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Lista de reglas de seguridad</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {!! Form::model($role,['route'=>'reglas.update',$role->id]) !!}
                                        <div class="form-group">
                                            {{ Form::label('name','Nombre:') }}
                                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('slug','Slug:') }}
                                            {{ Form::text('slug', null, ['class'=>'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('description','Description:') }}
                                            {{ Form::text('description', null, ['class'=>'form-control']) }}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('special','Acceso Especial:') }}
                                            {{ Form::select('special', ['all-access'=>'Acceso Total','no-access'=>'Sin Acceso'], null,['class'=>'form-control','placeholder' => 'Seleccione']) }}
                                        </div>
                                        <div class="row">
                                            <div class="col"><a href="{{ route('reglas.index')}}" class="btn btn-danger">Cancelar</a></div>
                                            <div class="col"><button class="btn" type="submit">Guardar</button></div>
                                        </div>
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
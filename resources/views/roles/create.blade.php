@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Reglas</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-md-11">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Lista de reglas de seguridad</h3>
                                        <div class="pull-right">
                                            <a href="{{ route('roles.index')}}" class="btn btn-info">Atras</a>
                                        </div>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                        {!! Form::open(['route'=>'roles.store']) !!}
                                        
                                        @include('roles.form.form')

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
@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">        
            <!-- /.col -->
            <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Clinica</a></li>
                <li><a href="#climun" data-toggle="tab">Sucursales</a></li>
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
                                            
                                                <div class="form-group">
                                                    {{ Form::label('rif_clinica','RIF de la Clinica:') }}
                                                    {{ $clinica->rif_clinica }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('nom_municipio','Nombre de la clinica:') }}
                                                    {{ $clinica->nom_clinica }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('dir_clinica','Direccion fiscal:') }}
                                                    {{ $clinica->dir_clinica }}
                                                </div>
                                                <div class="form-group">
                                                    {{ Form::label('tlf_contacto','Telefono de Contacto:') }}
                                                    {{ $clinica->tlf_clinica }}
                                                </div>               
                                                <div class="form-group">
                                                    {{ Form::label('correo_clinica','Correo electronico:') }}
                                                    {{ $clinica->correo_clinica }}
                                                </div>                                                        
                                            
                                            <div class="row">
                                                <div class="col"><a href="{{ route('clinicas.index')}}" class="btn  inline">Volver</a></div>
                                            </div>
                                            
                                        </div>
                                    <!-- /.box-body -->
                                    </div>
                                </div>
                            </div>
                        </section>
                        
                    </div>
                    <div class="tab-pane" id="climun">
                        {!! Form::open(['route'=>'clinicamunicipio.store','id'=>'Form1']) !!}
                                            
                                            <div class="form-group">
                                                {{ Form::label('estado_id','Estado:') }}
                                                {{ Form::select('estado_id', $estado, null,['class'=>'form-control','placeholder' => 'Seleccione']) }}
                                            </div> 
                                            <div class="form-group">
                                                {{ Form::label('municipio','Municipio:') }}
                                                {{ Form::select('municipio_id', ['N/A' => 'Seleccione'], null,['class'=>'form-control','id'=>'municipio_id']) }}
                                            </div>                                         
                                            <div class="form-group">                       
                                                {{ Form::hidden('clinica_id', $clinica->id_clinicas, ['class'=>'form-control']) }}
                                            </div>
                                            <div class="row">
                                                <div class="col"><a href="{{ route('clinicas.index')}}" class="btn btn-danger">Cancelar</a></div>
                                                <div class="col"><button class="btn" type="submit">Guardar</button></div>
                                            </div>
                        {!! Form::close() !!}                
                    </div>
                    <div>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Municipio</th>
                                    <th>Acciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($climun as $climuns)
                                    <tr>
                                        <td>{{$climuns->nom_estado}}</td>                                                       
                                        <td>{{$climuns->nom_municipio}}</td>                                        
                                        <td><a href="{{route('clinicas.destroy',$climuns->id_clinica_municipio)}}"><i class="fa fa-circle-o"></i> Eliminar </a></td>
                                    </tr>
                                @endforeach                                    
                            </tbody>
                            
                        </table>
                    </div>
                    <script>
                        $(document).ready(function(){
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
                        });
                    </script>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
        </div> <!-- /.row -->
    </div>    
@endsection


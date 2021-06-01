@extends('layouts.dashboard')

@section('content')


<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Examenes Clinicos</a>
              </li>
              <div class="pull-right">
                <a class="btn btn-primary" id="crear_ex">Crear Nuevo Examen</a>
                </div>
            </ul>
                <div>               
                    <form name="formu" id="formC" action="" method="POST" style="margin: 10px; display: none;">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="nom_examenes" id="nom_ex" class="form-control" placeholder="Nombre del examen" required>
                        </div>
                        <div class="input-group">
                            <input type="text" name="precio_examen_clinica" class="form-control" placeholder="Precio del Examen" required>
                        </div>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                                Crear Examen
                            </button>
                        </span>
                    </form>
                </div>
            </div>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <section class="content">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title">Lista de Examenes de la Clinica</h3>
                                    </div>
                                    @include('examenes_clinicas.show')
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

@section('scripts')
<!-- js de agregar -->
<script src="../js/funciones.js"></script>
@endsection

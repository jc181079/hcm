@extends('layouts.dashboard')

@section('content')


<div class="container">
    <div class="row">        
        <!-- /.col -->
        <div class="col-md-11">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Examenes de Laboratorio</a>
              </li>
              <!--<div class="pull-right">
                <a class="btn btn-primary" href="crear_e">Crear </a>
                </div>-->
            </ul>
                <div class="">               
                    <form name="formu" action="" method="POST" style="margin: 10px; display: none;">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="nom_especialidad" id="nom_esp" class="form-control" placeholder="Ingrese especialidad" required>
                        </div>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">
                                Agregar
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
                                        <h3 class="box-title">Lista de Examenes del Laboratorio</h3>
                                    </div>
                                    @include('examenes_laboratorio.show')
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
<script scr="../js/jquery-1.11.1.min"></script>
<script src="../js/ajax.js"></script>
@endsection

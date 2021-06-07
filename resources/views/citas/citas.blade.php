@extends('layouts.home')

@section('citas')

    {!! Form::open(['route'=>'citas.store','id'=>'Form1','class'=>'form-inline']) !!}

        <div class="form-group">
            {{ Form::label('Fecha_cita','Fecha de la cita medica:') }}
            {{ Form::text('fecha_cita', null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('especialidad','Fecha de la cita medica:') }}
            {{ Form::text('fecha_cita', null, ['class'=>'form-control']) }}
        </div>

        <div class="row">
            <div class="col"><a href="{{ route('clinicas.index')}}" class="btn btn-danger">Cancelar</a></div>
            <div class="col"><button class="btn" type="submit">Guardar</button></div>
        </div>



    {!! Form::close() !!}
    
@endsection
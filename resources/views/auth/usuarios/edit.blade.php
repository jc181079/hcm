@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
		<div class="col-sm-8">
			<div class="card">
				<div class="card-header">
				<a href="{{ url('/usuarios') }}" class="btn btn-sm btn-secondary rounded-circle">
					Back
					<i class="fas fa-chevron-left"></i></a>
				Editar usuario
				<a href="{{ route('auth.usuarios.index') }}" class="btn btn-sm btn-primary float-right">
					Back
				<i class="fas fa-list"></i>
				</a>
				</div>
				<div class="card-body panel-body">

				@include('auth.usuarios.form.error')

				{!! Form::model($user, ['route' => ['auth.usuarios.update', $user->id], 'method' => 'PUT']) !!}

				@include('auth.usuarios.form.form')

				{!!form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
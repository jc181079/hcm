@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	<a href="{{ url('/users') }}" class="btn btn-sm btn-secondary rounded-circle">
                        Back
                        <i class="fas fa-chevron-left"></i>
                    </a>
                	Detalles del Usuario 
                    @can('users.edit')
                	<a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary float-right">
                        Edit
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    @endcan
                </div>
                <div class="card-body panel-body">
                   <p><strong> Nombre </strong> {{$user->name}} </p>
                   <p><strong> Email </strong> {{$user->email}} </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

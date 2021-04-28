@extends('layouts.logins')

@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="{{ url('/home') }}"><b>HCM</b>GEB</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Inicia tu session</p>
  
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group has-feedback">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group has-feedback">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Recuerdame
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Aceptar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
  
      <a href="{{ route('password.request') }}">Olvide mi clave de acceso</a><br>
      <a href="{{ route('register') }}" class="text-center">Registrarte como nuevo usuario</a>
  
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
  
  <!-- jQuery 3 -->
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
  <!-- iCheck -->
  <script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
@endsection

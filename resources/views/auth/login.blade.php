@extends('baseUniquePage')

@section('title')
Login
@stop

@section('container')
<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Inicia Sesión</h4>
	<form action="/auth/login" method="POST">
		{!! csrf_field() !!}
		<div class="form-group">
			<input id="sign-in-email" name="email" type="email" class="form-control" placeholder="Email">
		</div>

		<div class="form-group">
			<input id="sign-in-password" name="password" type="password" class="form-control" placeholder="Password">
		</div>

		<div class="form-group m-b-xl">
			<div class="checkbox checkbox-primary">
				<input type="checkbox" id="keep_me_logged_in"/>
				<label for="keep_me_logged_in">Mantener conectado</label>
			</div>
		</div>
		<input type="submit" class="btn btn-inverse" value="Entrar">
	</form>
</div>
@stop

@section('footer')
<p>
	<small>¿No tienes cuenta?</small>
	<a href="/register">CRÉATE UNA CUENTA</a>
</p>
@stop
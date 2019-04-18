@extends('baseUniquePage')

@section('title')
Create Acount
@stop

@section('container')
<div class="simple-page-form animated flipInY" id="signup-form">
	<h4 class="form-title m-b-xl text-center">Crea una nueva cuenta</h4>
	<form action="/">

		<div class="form-group">
			<input id="sign-up-email" type="email" class="form-control" placeholder="Email">
		</div>

		<div class="form-group">
			<input id="sign-up-name" type="text" class="form-control" placeholder="Nick de Usuario">
		</div>

		<div class="form-group">
			<input id="sign-up-password" type="password" class="form-control" placeholder="Contraseña">
		</div>

		<div class="form-group">
			<lavel>Foto de usuario</lavel>
			<input id="sign-up-img" type="file" class="form-control" placeholder="Foto usuario">
		</div>

		<input type="submit" class="btn btn-inverse" value="Crea tu cuenta en Throwing Dices">
	</form>
</div>
@stop

@section('footer')
<div class="simple-page-footer">
	<p>
		<small>¿Ya tienes cuenta?</small>
		<a href="/login">ACCEDE CON ELLA</a>
	</p>
</div>
@stop
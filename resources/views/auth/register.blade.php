<?php
use Illuminate\Http\Request;
?>
@extends('baseUniquePage')

@section('title')
Create Acount
@stop

@section('container')
<div class="simple-page-form animated flipInY" id="signup-form">

	<h4 class="form-title m-b-xl text-center">Crea una nueva cuenta</h4>

	@if (count($errors) > 0)
	<div class="alert alert-danger margin-b-30">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action="/auth/register" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<div class="form-group">
			<input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
		</div>

		<div class="form-group">
			<input id="name" name="name" type="text" value="{{ old('name') }}" class="form-control" placeholder="Nick de Usuario" required>
		</div>

		<div class="form-group">
			<input id="password" name="password" type="password" class="form-control" placeholder="Contraseña" required>
		</div>

		<div class="form-group">
			<lavel>Foto de usuario</lavel>
			<input id="image" name="image" type="file" value="{{ old('image') }}" class="form-control" placeholder="Foto usuario" required>
		</div>

		<input type="submit" class="btn btn-inverse" value="Crea tu cuenta en Throwing Dices" required>
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
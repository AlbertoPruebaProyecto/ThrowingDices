@extends('baseUniquePage')

@section('title')
Inicio
@stop

@section('container')
<div class="simple-page-form animated flipInY">
    <center>
        <h4 class="form-title m-b-xl text-center">Bienvenido a Throwing Dices</h4>
        <p>Una plataforma para poder jugar con tus amigos a un buen rol de mesa sin necesidad de estar presentes en la misma habitación.</p>
        <div>
            <br>
            <a href="/login">
                <button type="button" class="btn btn-inverse">Acceso</button>
            </a>
            <br><br>
            <a href="/register">
                <button type="button" class="btn btn-inverse">Registro</button>
            </a>
        </div>
    </center>
</div>
@stop
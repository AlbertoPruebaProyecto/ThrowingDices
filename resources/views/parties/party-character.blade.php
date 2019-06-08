<?php
Use App\Party;
?>

@extends('baseLayout')

@section('title')
{{ $character->party->name }}
@stop

@section('titleDasboard')
{{ $character->party->name }}
@stop

@section('container')
<input type="hidden" id="idCharacter" value="{{ $character->id }}">
<div class="widget p-lg">
	<div class="row">
		<div class="col-md-1">
			<img src="{{ Config::get('app.url_image_race').'/'.$character->race->name.'.png' }}">
		</div>
		<div class="col-md-6 text-inline-character ">
			<div class="col-md-12">
				<div class="col-md-5">
					<div class="col-md-5">
						<h4 class="m-b-lg">Nombre: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->name }}" id="name" readonly>
					</div>
				</div>
				<div class="col-md-7">
					<div class="col-md-5">
						<h4 class="m-b-lg">Edad: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->age }}" readonly>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-5">
					<div class="col-md-5">
						<h4 class="m-b-lg">Nivel: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->level->num }}" readonly>
					</div>
				</div>
				<div class="col-md-7">
					<div class="col-md-5">
						<h4 class="m-b-lg">Sexo: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ trans('race.'.$character->sex) }}" readonly>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-5">
					<div class="col-md-5">
						<h4 class="m-b-lg">Raza: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ trans('race.'.$character->race->name) }}" readonly>
					</div>
				</div>
				<div class="col-md-7">
					<div class="col-md-5">
						<h4 class="m-b-lg">Clase: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ trans('classes.'.$character->classpj->name) }}" readonly>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-5">
					<div class="col-md-5">
						<h4 class="m-b-lg">Experiencia: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->experience }}" readonly>
					</div>
				</div>
				<div class="col-md-7">
					<div class="col-md-5">
						<h4 class="m-b-lg">Experiencia para el siguiente nivel: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->level->exp_limit }}" readonly>
					</div>
				</div>
			</div>
			<div class="col-md-12" style="margin-top: 20px">
				<div class="progress" style="margin-bottom: 0px">
					<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: {{ $character->livePercentage() }}%">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="m-b-lg nav-tabs-horizontal">
				<ul class="nav nav-tabs" role="tablist">
					@foreach ($character->party->characters as $otherCharacter)
					<li role="presentation" class="">
						<a href="#{{ $otherCharacter->id }}" aria-controls="{{ $otherCharacter->id }}" role="tab" data-toggle="tab">
							{{ $otherCharacter->name }}
						</a>
					</li>
					@endforeach
				</ul><!-- .nav-tabs -->
				<div class="tab-content p-md">
					@foreach ($character->party->characters as $otherCharacter)
					<div role="tabpanel" class="tab-pane fade" id="{{ $otherCharacter->id }}">
						{{ $otherCharacter->name }}
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<button id="btnActualiza">actualiza</button>
</div>
</div>
@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#btnActualiza').click(function(){
			loadData();
		});
	});

	function loadData(){
		var id = document.getElementById('idCharacter').value;
		$.ajax({
			url: "get-data-character",
			type: "get",
			data: {
				"character_id" : id
			},
			beforeSend: function(){
				console.log("El id ha sido enviado " + id);
			}
		})
		.success(function(data){
			console.log("se ha recibido el id " + data);
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			console.log("El servidor no responde...");
		});
	}
</script>
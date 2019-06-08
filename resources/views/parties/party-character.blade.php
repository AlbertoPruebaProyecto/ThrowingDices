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
	<!-- HEAD -->
	<div class="row">
		<!-- IMAGE -->
		<div class="col-md-1">
			<center>
				<img src="{{ Config::get('app.url_image_race').'/'.$character->race->name.'.png' }}">
				<button id="btnActualiza"class="btn mv-md btn-inverse">actualizar</button>
				<input type="checkbox" name="changeData" data-switchery>
			</center>
		</div>
		<!-- END IMAGE -->
		<!-- INFORMATION -->
		<div class="col-md-7 text-inline-character ">
			<div class="col-md-12">
				<!-- NAME -->
				<div class="col-md-6">
					<div class="col-md-5">
						<h4 class="m-b-lg">Nombre: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->name }}" readonly>
					</div>
				</div>
				<!-- END NAME -->
				<!-- AGE -->
				<div class="col-md-6">
					<div class="col-md-5">
						<h4 class="m-b-lg">Edad: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->age }}" readonly>
					</div>
				</div>
				<!-- END AGE -->
			</div>
			<div class="col-md-12">
				<!-- LEVEL -->
				<div class="col-md-6">
					<div class="col-md-5">
						<h4 class="m-b-lg">Nivel: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->level->num }}" id="level" readonly>
					</div>
				</div>
				<!-- END AGE -->
				<!-- SEX -->
				<div class="col-md-6">
					<div class="col-md-5">
						<h4 class="m-b-lg">Sexo: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" id="sex" value="{{ trans('race.'.$character->sex) }}" readonly>
					</div>
				</div>
				<!-- END SEX -->
			</div>
			<div class="col-md-12">
				<!-- RACE -->
				<div class="col-md-6">
					<div class="col-md-5">
						<h4 class="m-b-lg">Raza: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ trans('race.'.$character->race->name) }}" readonly>
					</div>
				</div>
				<!-- END RACE -->
				<!-- CLASS -->
				<div class="col-md-6">
					<div class="col-md-5">
						<h4 class="m-b-lg">Clase: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ trans('classes.'.$character->classpj->name) }}" readonly>
					</div>
				</div>
				<!-- END CLASS -->
			</div>
			<div class="col-md-12">
				<!-- EXPERIENCE -->
				<div class="col-md-6">
					<div class="col-md-5">
						<h4 class="m-b-lg">Experiencia: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->experience }}" id="exp" readonly>
					</div>
				</div>
				<!-- END EXPERIENCE -->
				<!-- EXPERIENCE LIMIT -->
				<div class="col-md-6">
					<div class="col-md-5">
						<h4 class="m-b-lg">Experiencia para el siguiente nivel: </h4>
					</div>
					<div class="col-md-7">
						<input type="text" class="form-control" value="{{ $character->level->exp_limit }}" id="expLimit" readonly>
					</div>
				</div>
				<!-- END EXPERIENCE LIMIT -->
			</div>
			<!-- PROGRESS BAR -->
			<div class="col-md-12" style="margin-top: 20px">
				<div class="progress" style="margin-bottom: 0px">
					<div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: {{ $character->livePercentage() }}%" id="progressBar">
					</div>
				</div>
			</div>
			<!-- END PROGRESS BAR -->
		</div>
		<!-- END INFORMATION -->
		<!-- TEAM INFORMATION -->
		<div class="col-md-4">
			<div class="m-b-lg nav-tabs-vertical">
				<!-- NAV TABS TEAM -->
				<ul class="nav nav-tabs" role="tablist">
					@foreach ($character->party->characters as $otherCharacter)
					<li role="presentation" class="">
						<a href="#{{ $otherCharacter->id }}" aria-controls="{{ $otherCharacter->id }}" role="tab" data-toggle="tab">
							{{ $otherCharacter->name }}
						</a>
					</li>
					@endforeach
				</ul>
				<!-- END NAV TABS TEAM -->
				<!-- BODY TAB TEAM -->
				<div class="tab-content p-md">
					@foreach ($character->party->characters as $otherCharacter)
					<div role="tabpanel" class="tab-pane fade" id="{{ $otherCharacter->id }}">
						<div class="col-md-3">
							<img src="{{ Config::get('app.url_image_race').'/'.$otherCharacter->race->name.'.png' }}">
						</div>
						<div class="text-inline-character">
							<div>
								<h4 class="m-b-lg">Nombre: </h4>
								<p>{{ $otherCharacter->name }}</p>
							</div>
							<div>
								<h4 class="m-b-lg">Raza: </h4>
								<p>{{ trans('race.'.$otherCharacter->race->name) }}</p>
							</div>
							<div>
								<h4 class="m-b-lg">Clase: </h4>
								<p>{{ trans('classes.'.$otherCharacter->classpj->name) }}</p>
							</div>
							<div>
								<h4 class="m-b-lg">Sexo: </h4>
								<p>{{ trans('race.'.$otherCharacter->sex) }}</p>
							</div>
							<div>
								<h4 class="m-b-lg">Edad: </h4>
								<p>{{ $otherCharacter->age }}</p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
				<!-- END BODY TAB TEAM -->
			</div>
		</div>
		<!-- END TEAM INFORMATION -->
	</div>
	<!-- END HEAD -->
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
			url: "/get-data-character",
			type: "get",
			data: {
				"character_id" : id
			},
			beforeSend: function(){
				console.log("El id ha sido enviado " + id);
			}
		})
		.success(function(data){
			writeDataHead(data['level'], data['exp'], data['expLimit'], data['livePercentage']);
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			console.log("El servidor no responde...");
		});
	}

	function writeDataHead(level, exp, expLimit, livePercentage){
		$('#level').val(level);
		$('#exp').val(exp);
		$('#expLimit').val(expLimit);
		document.getElementById('progressBar').style.width= livePercentage + '%';
	}
</script>
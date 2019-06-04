<?php
use App\Race;
use App\Classpj;

$races = Race::all();
$classpjs = Classpj::all();
?>

@extends('baseLayout')

@section('title')
@lang('parties.titleCreateCharacter')
@stop

@section('titleDasboard')
@lang('parties.titleCreateCharacter')
@stop

@section('container')

<div class="widget">
	<header class="widget-header">
		<center>
			<h1>
				@lang('parties.titleCreateCharacter')
			</h1>
		</center>
		<hr class="widget-separator">
		<div class="widget-body">

			@if (count($errors) > 0)
			<div class="alert alert-danger margin-b-30">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<form class="form-horizontal" action="/form-new-character" method="post" enctype="multipart/form-data">
				{!! csrf_field() !!}
				<input type="hidden" name="idParty" value="{{ $idParty }}">
				<!-- Row 1 -->
				<div class="row">
					<div class="col-md-6">
						<div class="m-b-lg">
							<center>
								<h3>
									Inserta los datos de tu personaje
								</h3>
							</center>
						</div>
						<!-- Name -->
						<div class="form-group">
							<label for="name" class="col-sm-4 col-sm-offset-0 control-label">
								Nombre de tu personaje
							</label>
							<div class="col-sm-6">
								<input type="text" name="name" class="form-control">
							</div>
						</div>
						<!-- End Name -->
						<!-- Sex -->
						<div class="form-group">
							<label for="sex" class="col-sm-4 col-sm-offset-0 control-label">
								Sexo de tu personaje
							</label>
							<div class="col-sm-6">
								<select name="sex" class="form-control">
									<option value="man">Hombre</option>
									<option value="woman">Mujer</option>
								</select>
							</div>
						</div>
						<!-- End Sex -->
						<!-- History -->
						<div class="form-group">
							<label for="history" class="col-sm-4 col-sm-offset-0 control-label">
								Escribe una breve historia sobre tu personaje
							</label>
							<div class="col-sm-6">
								<textarea name="history" class="form-control" rows="5"></textarea>
							</div>
						</div>
						<!-- End History -->
					</div>
					<div class="col-md-6">
						<div class="m-b-lg">
							<center>
								<h3>
									Tira los dados para tus estadisticas
								</h3>
							</center>
						</div>
						<!-- Strength -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="strength" class="col-sm-5 col-sm-offset-4 control-label">
									Fuerza
								</label>
								<div class="col-sm-3">
									<input type="text" name="strength" id="strength" class="form-control" disabled>
								</div>
							</div>
						</div>
						<!-- End Strength -->
						<!-- Skill -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="skill" class="col-sm-3 col-sm-offset-0 control-label">
									Destreza
								</label>
								<div class="col-sm-3">
									<input type="text" name="skill" id="skill" class="form-control" disabled>
								</div>
							</div>
						</div>
						<!-- End Skill -->
						<!-- Constitution -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="constitution" class="col-sm-5 col-sm-offset-4 control-label">
									Constitución
								</label>
								<div class="col-sm-3">
									<input type="text" name="constitution" id="constitution" class="form-control" disabled>
								</div>
							</div>
						</div>
						<!-- End Constitution -->
						<!-- Intelligence -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="intelligence" class="col-sm-3 col-sm-offset-0 control-label">
									Inteligencia
								</label>
								<div class="col-sm-3">
									<input type="text" name="intelligence" id="intelligence" class="form-control" disabled>
								</div>
							</div>
						</div>
						<!-- End Intelligence -->
						<!-- Wisdom -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="wisdom" class="col-sm-5 col-sm-offset-4 control-label">
									Sabiduria
								</label>
								<div class="col-sm-3">
									<input type="text" name="wisdom" id="wisdom" class="form-control" disabled>
								</div>
							</div>
						</div>
						<!-- End Wisdom -->
						<!-- Charisma -->
						<div class="col-md-6">
							<div class="form-group">
								<label for="charisma" class="col-sm-3 col-sm-offset-0 control-label">
									Carisma
								</label>
								<div class="col-sm-3">
									<input type="text" name="charisma" id="charisma" class="form-control" disabled>
								</div>
							</div>
						</div>
						<!-- End Charisma -->
						<center>
							<button id="btnStats" type="button" class="btn mv-md btn-inverse">
								<img class="icon-button-dice" src="/assets/images/d20.png">
							</button>
						</center>
					</div>
				</div>
				<!-- End Row 1 -->
				<br>
				<br>
				<!-- Row 2 -->
				<div class="row">
					<!-- Race -->
					<div class="col-md-6">
						<div class="m-b-lg">
							<center>
								<h3>
									Escoge una raza
								</h3>
							</center>
						</div>
						<div class="col-sm-7">
							<select name="race" id="selectRace" class="form-control" onchange="changeRace()">
								@foreach ($races as $race)
								<option value="{{ $race->name }}">{{ trans('race.name-'.$race->name) }}</option>
								@endforeach
							</select>
							@foreach ($races as $race)
							<div {{ $race == $races[0]? '': 'hidden' }} class="div-race div-{{ $race->name }}">
								<p class="desc-race">{{ trans('race.desc-'.$race->name) }}</p>
							</div>
							@endforeach
						</div>
						<div class="col-sm-5">
							@foreach ($races as $race)
							<div {{ $race == $races[0]? '': 'hidden' }} class="div-race div-{{ $race->name }}">
								<center>
									<img src="{{ Config::get('app.url_image_race').'/'.$race->name.'.png' }}">
								</center>
							</div>
							@endforeach
						</div>
					</div>
					<!-- End Race -->
					<!-- Class -->
					<div class="col-md-6">
						<div class="m-b-lg">
							<center>
								<h3>
									Escoge una Clase
								</h3>
							</center>
						</div>
						<div class="col-sm-7">
							<select name="classpj" id="selectClass" class="form-control" onchange="changeClass()">
								@foreach ($classpjs as $classpj)
								<option value="{{ $classpj->name }}">{{ trans('classes.name-'.$classpj->name) }}</option>
								@endforeach
							</select>
							@foreach ($classpjs as $classpj)
							<div {{ $classpj == $classpjs[0]? '': 'hidden' }} class="div-class div-{{ $classpj->name }}">
								<p class="desc-class">{{ trans('classes.desc-'.$classpj->name) }}</p>
							</div>
							@endforeach
						</div>
						<div class="col-sm-5">
							@foreach ($classpjs as $classpj)
							<div {{ $classpj == $classpjs[0]? '': 'hidden' }} class="div-class div-{{ $classpj->name }}">
								<center>
									<img src="{{ Config::get('app.url_image_class').'/'.$classpj->name.'.jpg' }}">
								</center>
							</div>
							@endforeach
						</div>
					</div>
					<!-- End Class -->
				</div>
				<!-- End Row 2 -->
				<br>
				<br>
				<!-- Row 3 -->
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">
						<button type="submit" class="btn btn-lg btn-inverse">
							Crear personaje y unirse a la partida
						</button>
					</div>
				</div>
				<!-- End Row 3 -->
			</form>

		</div>
	</header>
</div>

@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#btnStats').click(function(){
			$('#strength').val(Math.floor(Math.random() * (20 - 0) + 1));
			$('#skill').val(Math.floor(Math.random() * (20 - 0) + 1));
			$('#constitution').val(Math.floor(Math.random() * (20 - 0) + 1));
			$('#wisdom').val(Math.floor(Math.random() * (20 - 0) + 1));
			$('#intelligence').val(Math.floor(Math.random() * (20 - 0) + 1));
			$('#charisma').val(Math.floor(Math.random() * (20 - 0) + 1));
		});
	});

	function changeRace(){
		var raceName = document.getElementById("selectRace").value;
		$('.div-race').hide();
		$('.div-'+raceName).show();
	}

	function changeClass(){
		var raceClass = document.getElementById("selectClass").value;
		$('.div-class').hide();
		$('.div-'+raceClass).show();
	}
</script>
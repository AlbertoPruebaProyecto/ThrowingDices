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
				<!--button id="btnActualiza"class="btn mv-md btn-inverse">actualizar</button-->
				<input type="checkbox" name="changeData" data-switchery onchange="activeInputs()">
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
						<input type="text" class="form-control editable" value="{{ $character->experience }}" id="exp" readonly>
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
	<!-- BODY -->
	<div class="row">
		<!-- STATS -->
		<div class="col-md-7">
			<!-- NAV TABS STATS -->
			<div class="m-b-lg nav-tabs-horizontal">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#pincipalStats" aria-controls="pincipalStats" role="tab" data-toggle="tab">
							Atributos
						</a>
					</li>
				</ul>
			</div>
			<!-- END NAV TABS STATS -->
			<!-- BODY TABS STATS -->
			<div class="tab-content p-md">
				<div role="tabpanel" class="tab-pane fade in active" id="pincipalStats">
					<!-- STATS PRINCIPAL -->
					<div class="col-md-6">
						<div class="row">
							<div>
								<div class="col-md-3">
								</div>
								<div class="col-md-3">
									<p align="center">Puntuación Caract.</p>
								</div>
								<div class="col-md-3">
									<p align="center">Modificador Caract.</p>
								</div>
								<div class="col-md-3">
									<p align="center">Modificador Temporal</p>
								</div>
							</div>
							<!-- STRENGTH -->
							<div>
								<div class="col-md-3">
									<p align="right">Fuerza</p>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->strength }}" id="strength" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control strengthMod" value="{{ $character->modCharacter('strength') }}" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->strength_temp }}" id="strengthTemp" readonly>
								</div>
							</div>
							<!-- END STRENGTH -->
							<!-- SKILL -->
							<div>
								<div class="col-md-3">
									<p align="right">Destreza</p>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->skill }}" id="skill" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->skill_temp }}" id="skillTemp" readonly>
								</div>
							</div>
							<!-- END SKILL -->
							<!-- CONSTITUTION -->
							<div>
								<div class="col-md-3">
									<p align="right">Constitución</p>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->constitution }}" id="constitution" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control constitutionMod" value="{{ $character->modCharacter('constitution') }}" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->constitution_temp }}" id="constitutionTemp" readonly>
								</div>
							</div>
							<!-- END CONSTITUTION -->
							<!-- INTELLIGENCE -->
							<div>
								<div class="col-md-3">
									<p align="right">Inteligencia</p>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->intelligence }}" id="intelligence" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control intelligenceMod" value="{{ $character->modCharacter('intelligence') }}" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->intelligence_temp }}" id="intelligenceTemp" readonly>
								</div>
							</div>
							<!-- END INTELLIGENCE -->
							<!-- WISDOM -->
							<div>
								<div class="col-md-3">
									<p align="right">Sabiduría</p>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->wisdom }}" id="wisdom" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control wisdomMod" value="{{ $character->modCharacter('wisdom') }}" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->wisdom_temp }}" id="wisdomTemp" readonly>
								</div>
							</div>
							<!-- END WISDOM -->
							<!-- WISDOM -->
							<div>
								<div class="col-md-3">
									<p align="right">Carisma</p>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->charisma }}" id="charisma" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control charismaMod" value="{{ $character->modCharacter('charisma') }}" readonly>
								</div>
								<div class="col-md-3">
									<input type="text" class="form-control editable" value="{{ $character->charisma_temp }}" id="charismaTemp" readonly>
								</div>
							</div>
						</div>
						<!-- END WISDOM -->
						<hr>
						<!-- SAVE THROW FORTITUDE -->
						<div class="row">
							<div class="col-md-12">
								<p align="left">Tirada de salvación: Fortaleza (Constitución)</p>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control" value="{{ $character->fortitudeTotal() }}" id="fortitudeTotal" readonly>
								<p class="no-space">Total</p>
							</div>
							<div class="col-md-1">
								<h4 align="center">=</h4>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->fortitude_base }}" id="fortitudeBase" readonly>
								<p class="no-space">Salvación Base</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control constitutionMod" value="{{ $character->modCharacter('constitution') }}" readonly>
								<p class="no-space">Modif Const</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->fortitude_mod_var }}" id="fortitudeModVar" readonly>
								<p class="no-space">Modif Vario</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->fortitude_temp }}" id="fortitudeTemp" readonly>
								<p class="no-space">Modif Temp</p>
							</div>
						</div>
						<!-- END SAVING THROW FORTITUDE -->
						<hr class="no-space">
						<!-- SAVIN THROW REFLEX -->
						<div class="row">
							<div class="col-md-12">
								<p align="left">Tirada de salvación: Reflejos (Destreza)</p>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control" value="{{ $character->reflexTotal() }}" id="reflexTotal" readonly>
								<p class="no-space">Total</p>
							</div>
							<div class="col-md-1">
								<h4 align="center">=</h4>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->reflex_base }}" id="reflexBase" readonly>
								<p class="no-space">Salvación Base</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
								<p class="no-space">Modif Des</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->reflex_mod_var }}" id="reflexModVar" readonly>
								<p class="no-space">Modif Vario</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->reflex_temp }}" id="reflexTemp" readonly>
								<p class="no-space">Modif Temp</p>
							</div>
						</div>
						<!-- END SAVIN THROW REFLEX -->
						<hr class="no-space">
						<!-- SAVIN THROW WILL -->
						<div class="row">
							<div class="col-md-12">
								<p align="left">Tirada de salvación: Voluntad (Sabiduría)</p>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control" value="{{ $character->willTotal() }}" id="willTotal" readonly>
								<p class="no-space">Total</p>
							</div>
							<div class="col-md-1">
								<h4 align="center">=</h4>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->will_base }}" id="willBase" readonly>
								<p class="no-space">Salvación Base</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control wisdomMod" value="{{ $character->modCharacter('wisdom') }}" readonly>
								<p class="no-space">Modif Sab</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->will_mod_var }}" id="willModVar" readonly>
								<p class="no-space">Modif Vario</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->will_temp }}" id="willTemp" readonly>
								<p class="no-space">Modif Temp</p>
							</div>
						</div>
						<!-- END SAVIN THROW WILL -->
					</div>
					<!-- END STATS PRINCIPAL -->
					<div class="col-md-6">
						<!-- HIT POINT -->
						<div class="row">
							<div class="col-md-4">
								<input type="text" class="form-control editable" value="{{ $character->hit_points_total }}" id="hitPointsTotal" readonly>
								<p class="no-space">P.G. Totales</p>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control editable" value="{{ $character->hit_points_present }}" id="hitPointsPresent" readonly>
								<p class="no-space">P.G. Actuales</p>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control editable baseAttackMod" value="{{ $character->base_attack }}" id="baseAttack" readonly>
								<p class="no-space">Ataque Base</p>
							</div>
						</div>
						<!-- END HIT POINT -->
						<hr class="no-space">
						<!-- INITIATIVE -->
						<div class="row">
							<div class="col-md-3">
								<h4 align="right">Iniciativa</h4>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" value="{{ $character->initiativeTotal() }}" id="initiativeTotal" readonly>
								<p class="no-space">Total</p>
							</div>
							<div class="col-md-1">
								<h4 class="no-space">=</h4>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
								<p class="no-space">Modif Des</p>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control editable" value="{{ $character->initiative }}" id="initiative" readonly>
								<p class="no-space">Modif Vario</p>
							</div>
						</div>
						<!-- END INITIATIVE -->
						<hr class="no-space">
						<!-- ARMOR -->
						<div class="row">
							<div class="col-md-3">
								<h4 align="right">CA Armadura</h4>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" value="{{ $character->armorTotal() }}" id="armorTotal" readonly>
								<p class="no-space">Total</p>
							</div>
							<div class="col-md-1">
								<h4 align="center">=</h4>
							</div>
							<div class="col-md-2">
								<h4 align="center">+10</h4>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control editable" value="{{ $character->armor_bonus }}" id="bonusArmor" readonly>
								<p class="no-space">Bonif. Armad</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
								<p class="no-space">Modif Des</p>
							</div>
						</div>
						<!-- END ARMOR -->
						<hr class="no-space">
						<!-- BMC -->
						<div class="row">
							<div class="col-md-2">
								<h4 align="right">BMC</h4>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control" value="{{ $character->BMC() }}" id="bmc" readonly>
								<p class="no-space">Total</p>
							</div>
							<div class="col-md-1">
								<h4 align="center">=</h4>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control baseAttackMod" value="{{ $character->base_attack }}" readonly>
								<p class="no-space">Ataque Base</p>
							</div>
							<div class="col-md-3">
								<input type="text" class="form-control strengthMod" value="{{ $character->modCharacter('strength') }}" readonly>
								<p class="no-space">Modif Fue</p>
							</div>
						</div>
						<!-- END BMC -->
						<hr class="no-space">
						<!-- DMC -->
						<div class="row">
							<div class="col-md-2">
								<h4 align="right">DMC</h4>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control" value="{{ $character->DMC() }}" id="dmc" readonly>
								<p class="no-space">Total</p>
							</div>
							<div class="col-md-1">
								<h4 align="center">=</h4>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control baseAttackMod" value="{{ $character->base_attack }}" readonly>
								<p class="no-space">Ataque Base</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control strengthMod" value="{{ $character->modCharacter('strength') }}" readonly>
								<p class="no-space">Modif Fue</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
								<p class="no-space">Modif Des</p>
							</div>
							<div class="col-md-1">
								<h4 align="center">+10</h4>
							</div>
						</div>
						<!-- END DMC -->
					</div>
				</div>
			</div>
			<!-- END BODY TABS STATS -->
		</div>
		<!-- END STATS -->
		<!-- CHAT -->
		<div class="col-md-5">

		</div>
		<!-- END CHAT -->
	</div>
	<!-- END BODY -->
</div>
</div>
@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	var isChange = false;

	$(document).ready(function(){
		$('#btnActualiza').click(function(){
			loadData();
		});
	});

	function activeInputs(){
		if(isChange){
			$('.editable').prop('readonly', isChange);
			isChange = false;
			loadData();
		}else{
			$('.editable').prop('readonly', isChange);
			isChange = true;
		}
	}

	function loadData(){
		$.ajax({
			url: "/get-data-character",
			type: "get",
			data: {
				"character_id" 	: document.getElementById('idCharacter').value,
				"experience"	: document.getElementById('exp').value,
				"strength"		: document.getElementById('strength').value,
				"strengthTemp"	: document.getElementById('strengthTemp').value,
				"skill"		: document.getElementById('skill').value,
				"skillTemp"	: document.getElementById('skillTemp').value,
				"constitution"		: document.getElementById('constitution').value,
				"constitutionTemp"	: document.getElementById('constitutionTemp').value,
				"intelligence"		: document.getElementById('intelligence').value,
				"intelligenceTemp"	: document.getElementById('intelligenceTemp').value,
				"wisdom"		: document.getElementById('wisdom').value,
				"wisdomTemp"	: document.getElementById('wisdomTemp').value,
				"charisma"		: document.getElementById('charisma').value,
				"charismaTemp"	: document.getElementById('charismaTemp').value,
				"hitPointsPresent"	: document.getElementById('hitPointsPresent').value,
				"hitPointsTotal"	: document.getElementById('hitPointsTotal').value,
				"initiative"	: document.getElementById('initiative').value,
				"bonusArmor"	: document.getElementById('bonusArmor').value,
				"baseAttack"	: document.getElementById('baseAttack').value,
				"fortitudeBase"		: document.getElementById('fortitudeBase').value,
				"fortitudeModVar"	: document.getElementById('fortitudeModVar').value,
				"fortitudeTemp"		: document.getElementById('fortitudeTemp').value,
				"reflexBase"	: document.getElementById('reflexBase').value,
				"reflexModVar"	: document.getElementById('reflexModVar').value,
				"reflexTemp"	: document.getElementById('reflexTemp').value,
				"willBase"		: document.getElementById('willBase').value,
				"willModVar"	: document.getElementById('willModVar').value,
				"willTemp"		: document.getElementById('willTemp').value,
			},
			beforeSend: function(){
				console.log("La consulta ha salido");
			}
		})
		.success(function(data){
			console.log("La consulta ha vuelto");
			writeDataHead(data['level'], data['exp'], data['expLimit'], data['livePercentage']);
			writeStatsStrength(data['strength'], data['strengthMod'], data['strengthTemp']);
			writeStatsSkill(data['skill'], data['skillMod'], data['skillTemp']);
			writeStatsConstitution(data['constitution'], data['constitutionMod'], data['constitutionTemp']);
			writeStatsIntelligence(data['intelligence'], data['intelligenceMod'], data['intelligenceTemp']);
			writeStatsWisdom(data['wisdom'], data['wisdomMod'], data['wisdomTemp']);
			writeStatsCharisma(data['charisma'], data['charismaMod'], data['charismaTemp']);
			writeStatsHitPoints(data['hitPointsTotal'], data['hitPointsPresent']);
			writeStatsInitiative(data['initiative'], data['initiativeTotal']);
			writeStatsArmor(data['bonusArmor'], data['armorTotal'], data['baseAttack'], data['bmc'], data['dmc']);
			writeStatsFortitude(data['fortitudeBase'], data['fortitudeModVar'], data['fortitudeTemp'], data['fortitudeTotal']);
			writeStatsReflex(data['reflexBase'], data['reflexModVar'], data['reflexTemp'], data['reflexTotal']);
			writeStatsWill(data['willBase'], data['willModVar'], data['willTemp'], data['willTotal']);
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

	function writeStatsStrength(strength, strengthMod, strengthTemp){
		$('#strength').val(strength);
		$('.strengthMod').val(strengthMod);
		$('#strengthTemp').val(strengthTemp);
	}

	function writeStatsSkill(skill, skillMod, skillTemp){
		$('#skill').val(skill);
		$('.skillMod').val(skillMod);
		$('#skillTemp').val(skillTemp);
	}

	function writeStatsConstitution(constitution, constitutionMod, constitutionTemp){
		$('#constitution').val(constitution);
		$('.constitutionMod').val(constitutionMod);
		$('#constitutionTemp').val(constitutionTemp);
	}

	function writeStatsIntelligence(intelligence, intelligenceMod, intelligenceTemp){
		$('#intelligence').val(intelligence);
		$('.intelligenceMod').val(intelligenceMod);
		$('#intelligenceTemp').val(intelligenceTemp);
	}

	function writeStatsWisdom(wisdom, wisdomMod, wisdomTemp){
		$('#wisdom').val(wisdom);
		$('.wisdomMod').val(wisdomMod);
		$('#wisdomTemp').val(wisdomTemp);
	}

	function writeStatsCharisma(charisma, charismaMod, charismaTemp){
		$('#charisma').val(charisma);
		$('.charismaMod').val(charismaMod);
		$('#charismaTemp').val(charismaTemp);
	}

	function writeStatsHitPoints(hitPointsTotal, hitPointsPresent){
		$('#hitPointsTotal').val(hitPointsTotal);
		$('#hitPointsPresent').val(hitPointsPresent);
	}

	function writeStatsInitiative(initiative, initiativeTotal){
		$('#initiative').val(initiative);
		$('#initiativeTotal').val(initiativeTotal);
	}

	function writeStatsArmor(bonusArmor, armorTotal, baseAttack, bmc, dmc){
		$('#bonusArmor').val(bonusArmor);
		$('#armorTotal').val(armorTotal);
		$('.baseAttackMod').val(baseAttack);
		$('#bmc').val(bmc);
		$('#dmc').val(dmc);
	}

	function writeStatsFortitude(fortitudeBase, fortitudeModVar, fortitudeTemp, fortitudeTotal){
		$('#fortitudeBase').val(fortitudeBase);
		$('#fortitudeModVar').val(fortitudeModVar);
		$('#fortitudeTemp').val(fortitudeTemp);
		$('#fortitudeTotal').val(fortitudeTotal);
	}

	function writeStatsReflex(reflexBase, reflexModVar, reflexTemp, reflexTotal){
		$('#reflexBase').val(reflexBase);
		$('#reflexModVar').val(reflexModVar);
		$('#reflexTemp').val(reflexTemp);
		$('#reflexTotal').val(reflexTotal);
	}

	function writeStatsWill(willBase, willModVar, willTemp, willTotal){
		$('#willBase').val(willBase);
		$('#willModVar').val(willModVar);
		$('#willTemp').val(willTemp);
		$('#willTotal').val(willTotal);
	}
</script>
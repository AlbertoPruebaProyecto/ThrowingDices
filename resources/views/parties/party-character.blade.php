<?php
Use App\Party;
Use App\Spell;
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
					<li role="presentation">
						<a href="#abilities" aria-controls="abilities" role="tab" data-toggle="tab">
							Habilidades
						</a>
					</li>
					<li role="presentation">
						<a href="#specialAptitude" aria-controls="specialAptitude" role="tab" data-toggle="tab">
							Aptitudes especiales
						</a>
					</li>
					<li role="presentation">
						<a href="#spells" aria-controls="spells" role="tab" data-toggle="tab">
							Hechizos
						</a>
					</li>
					<li role="presentation">
						<a href="#equipment" aria-controls="equipment" role="tab" data-toggle="tab">
							Equipo
						</a>
					</li>
				</ul>
			</div>
			<!-- END NAV TABS STATS -->
			<!-- BODY TABS STATS -->
			<div class="tab-content p-md">
				<!-- STATS PRINCIPAL -->
				<div role="tabpanel" class="tab-pane fade in active" id="pincipalStats">
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
							<div class="col-md-4">
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
								<input type="text" class="form-control editable" value="{{ $character->armor_bonus }}" id="bonusArmor" readonly>
								<p class="no-space">Bonif. Armad</p>
							</div>
							<div class="col-md-2">
								<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
								<p class="no-space">Modif Des</p>
							</div>

							<div class="col-md-1">
								<h4 align="center">+10</h4>
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
				<!-- END BODY TABS STATS -->
				<!-- BODY TABS ABILITIES -->
				<div role="tabpanel" class="tab-pane fade" id="abilities">
					@foreach ($character->abilities as $ability)
					<div class="col-md-12">
						<div class="col-md-1" align="right">
							<i class="glyphicon glyphicon-{{ $ability->special_class? 'check': 'unchecked' }}"></i>
						</div>
						<div class="col-md-3">
							<p>{{ trans('skills.'.$ability->name) }}</p>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" value="{{ $ability->totalRank() }}" id="totalRank{{ $ability->id }}" readonly>
							<p class="no-space">Total</p>
						</div>
						<div class="col-md-1">
							<h4 align="center">=</h4>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control {{ $ability->skill_base }}Mod" value="{{ $character->modCharacter($ability->skill_base) }}" readonly>
							<p class="no-space">{{ trans('skills.'.$ability->skill_base) }}</p>
						</div>
						<div class="col-md-2">
							<input type="text" class="form-control" value="{{ $ability->rank }}" id="rank{{ $ability->id }}" readonly>
							<p class="no-space">Rango</p>
						</div>
						<div class="col-md-1">
							<button id=""class="btn mv-md btn-inverse" onclick="loadAbility({{ $ability->id }}, 'true')">
								<i class="glyphicon glyphicon-plus"></i>
							</button>
						</div>
					</div>
					@endforeach
					<div class="col-md-12">
						<p>Las habilidades con <i class="glyphicon glyphicon-check"></i> son especiales de clase, por lo que al aprenderlas la primera vez se sumarán puntos de rango automaticamente.</p>
					</div>
				</div>
				<!-- END BODY TABS ABILITIES -->
				<!-- BODY TABS SPECIAL APTITUDE -->
				<div role="tabpanel" class="tab-pane fade" id="specialAptitude">
					<!-- ACORDION LEARN -->
					<div class="row" id="divSpecialAptitudeLearn">
						@foreach ($character->specialAptitudes as $aptitude)
						<div class="col-md-12">
							<h4 class="panel-title text-primary">{{$aptitude->name}}</h4>
							<p align="justify">{!! $aptitude->description !!}</p>
							<hr>
						</div>
						@endforeach
					</div>
					<!-- END ACORDION LEARN -->
					<div class="row" align="right">
						<button id=""class="btn mv-md btn-inverse" onclick="changeShowDiv('accordionNoLearn')">
							Mostrar todas las aptitudes
						</button>
					</div>
					<!-- NO LEARN -->
					<div class="row">
						<div class="panel-group accordion" id="accordionNoLearn" role="tablist" aria-multiselectable="false"style="display: none;">
							@foreach ($character->classpj->specialAptitudes as $aptitude)
							<div class="panel panel-default">
								<!-- HEAD -->
								<div class="panel-heading" role="tab" id="heading-{{ $aptitude->id }}">
									<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordionNoLearn" href="#collapse-{{ $aptitude->id }}" aria-expanded="false" aria-controls="collapse-{{ $aptitude->id }}">
										<h4 class="panel-title">{{ $aptitude->name }}</h4>
										<i class="fa acc-switch"></i>
									</a>
								</div>
								<!-- END HEAD -->
								<!-- BODY -->
								<div id="collapse-{{ $aptitude->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $aptitude->id }}">
									<div class="panel-body">
										<p align="justify">{!! $aptitude->description !!}</p>
										<div class="row" align="center">
											<button id="btnSP{{ $aptitude->id }}"class="btn mv-md btn-lg btn-inverse" onclick="learnSpecialAptitude({{ $character->id.' ,'.$aptitude->id }})" {{ $character->isLearnAptitude($aptitude->id)? 'disabled': '' }}>
												<i class="glyphicon glyphicon-plus"></i>
												Aprender
											</button>
										</div>
									</div>
								</div>
								<!-- END BODY -->
							</div>
							@endforeach
						</div>
					</div>
					<!-- END NO LEARN -->
				</div>
				<!-- END BODY TABS SPECIAL APTITUDE -->
				<!-- BODY TABS SPELLS -->
				<div role="tabpanel" class="tab-pane fade" id="spells">
					<!-- SPELL LEARN -->
					<div class="row" id="divSpellsLearn">
						@foreach ($character->spells as $spell)
						<div class="col-md-1" align="right">
							<span class="label label-success">{{ trans('spell.'.$spell->level()) }}</span>
						</div>
						<div class="col-md-11">
							<h4 class="panel-title text-primary">{{$spell->name}}</h4>
						</div>
						<div class="col-md-12">
							<p>{{ $spell->description }}</p>
							<hr>
						</div>
						@endforeach
					</div>
					<!-- END SPELL LEARN -->
					<div class="row" align="right">
						<button id=""class="btn mv-md btn-inverse" onclick="changeShowDiv('divNoLearn')">
							Mostrar todos los hechizos de clase
						</button>
					</div>
					<!-- SPELL NO LEARN -->
					<div class="row" style="margin-top: 20px;">
						<div id="divNoLearn"style="display: none;">
							@foreach (Spell::where('school', 'LIKE', $character->classpj->name.'%')->get() as $spell)
							<div class="col-md-12">
								<div class="col-md-10">
									<div class="col-md-1" align="right">
										<span class="label label-success">{{ trans('spell.'.$spell->level()) }}</span>
									</div>
									<div class="col-md-11">
										<h4 class="panel-title text-primary">{{$spell->name}}</h4>
									</div>
									<div class="col-md-12">
										<p>{{ $spell->description }}</p>
									</div>
								</div>
								<div class="col-md-2">
									<button id="btnSpell{{ $spell->id }}" class="btn mv-md btn-lg btn-inverse" onclick="learnSpell({{ $character->id.', '.$spell->id }})" {{ $character->isLearnSpell($spell->id)? 'disabled': '' }}>
										<i class="glyphicon glyphicon-plus"></i>
										Aprender
									</button>
								</div>
								<div class="col-md-12">
									<hr>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<!-- END SPELL NO LEARN -->
				</div>
				<!-- END BODY TABS SPELLS -->
				<!-- BODY TABS EQUIPMENT -->
				<div role="tabpanel" class="tab-pane fade" id="equipment">
					Equipo
				</div>
				<!-- END BODY TABS EQUIPMENT -->
			</div>
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
				"character_id" 		: document.getElementById('idCharacter').value,
				"experience"		: document.getElementById('exp').value,
				"strength"			: document.getElementById('strength').value,
				"strengthTemp"		: document.getElementById('strengthTemp').value,
				"skill"				: document.getElementById('skill').value,
				"skillTemp"			: document.getElementById('skillTemp').value,
				"constitution"		: document.getElementById('constitution').value,
				"constitutionTemp"	: document.getElementById('constitutionTemp').value,
				"intelligence"		: document.getElementById('intelligence').value,
				"intelligenceTemp"	: document.getElementById('intelligenceTemp').value,
				"wisdom"			: document.getElementById('wisdom').value,
				"wisdomTemp"		: document.getElementById('wisdomTemp').value,
				"charisma"			: document.getElementById('charisma').value,
				"charismaTemp"		: document.getElementById('charismaTemp').value,
				"hitPointsPresent"	: document.getElementById('hitPointsPresent').value,
				"hitPointsTotal"	: document.getElementById('hitPointsTotal').value,
				"initiative"		: document.getElementById('initiative').value,
				"bonusArmor"		: document.getElementById('bonusArmor').value,
				"baseAttack"		: document.getElementById('baseAttack').value,
				"fortitudeBase"		: document.getElementById('fortitudeBase').value,
				"fortitudeModVar"	: document.getElementById('fortitudeModVar').value,
				"fortitudeTemp"		: document.getElementById('fortitudeTemp').value,
				"reflexBase"		: document.getElementById('reflexBase').value,
				"reflexModVar"		: document.getElementById('reflexModVar').value,
				"reflexTemp"		: document.getElementById('reflexTemp').value,
				"willBase"			: document.getElementById('willBase').value,
				"willModVar"		: document.getElementById('willModVar').value,
				"willTemp"			: document.getElementById('willTemp').value,
			},
			beforeSend: function(){
				console.log("La consulta loadData ha salido");
			}
		})
		.success(function(data){
			console.log("La consulta loadData ha vuelto");
			writeDataHead(data);
			writeStats(data);
			writeAbilities(data);
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			console.log("El servidor no responde...");
		});
	}

	function writeDataHead(data){
		$('#level').val(data['level']);
		$('#exp').val(data['exp']);
		$('#expLimit').val(data['expLimit']);
		document.getElementById('progressBar').style.width= data['livePercentage'] + '%';
	}

	function writeStats(data){
		// Strength
		$('#strength').val(data['strength']);
		$('.strengthMod').val(data['strengthMod']);
		$('#strengthTemp').val(data['strengthTemp']);
		// Skill
		$('#skill').val(data['skill']);
		$('.skillMod').val(data['skillMod']);
		$('#skillTemp').val(data['skillTemp']);
		// Constitution
		$('#constitution').val(data['constitution']);
		$('.constitutionMod').val(data['constitutionMod']);
		$('#constitutionTemp').val(data['constitutionTemp']);
		// Intelligence
		$('#intelligence').val(data['intelligence']);
		$('.intelligenceMod').val(data['intelligenceMod']);
		$('#intelligenceTemp').val(data['intelligenceTemp']);
		// Wisdom
		$('#wisdom').val(data['wisdom']);
		$('.wisdomMod').val(data['wisdomMod']);
		$('#wisdomTemp').val(data['wisdomTemp']);
		// Charisma
		$('#charisma').val(data['charisma']);
		$('.charismaMod').val(data['charismaMod']);
		$('#charismaTemp').val(data['charismaTemp']);
		// HitPoints
		$('#hitPointsTotal').val(data['hitPointsTotal']);
		$('#hitPointsPresent').val(data['hitPointsPresent']);
		// Initiative
		$('#initiative').val(data['initiative']);
		$('#initiativeTotal').val(data['initiativeTotal']);
		// Armor
		$('#bonusArmor').val(data['bonusArmor']);
		$('#armorTotal').val(data['armorTotal']);
		$('.baseAttackMod').val(data['baseAttack']);
		$('#bmc').val(data['bmc']);
		$('#dmc').val(data['dmc']);
		// Fortitude
		$('#fortitudeBase').val(data['fortitudeBase']);
		$('#fortitudeModVar').val(data['fortitudeModVar']);
		$('#fortitudeTemp').val(data['fortitudeTemp']);
		$('#fortitudeTotal').val(data['fortitudeTotal']);
		// Reflex
		$('#reflexBase').val(data['reflexBase']);
		$('#reflexModVar').val(data['reflexModVar']);
		$('#reflexTemp').val(data['reflexTemp']);
		$('#reflexTotal').val(data['reflexTotal']);
		// Will
		$('#willBase').val(data['willBase']);
		$('#willModVar').val(data['willModVar']);
		$('#willTemp').val(data['willTemp']);
		$('#willTotal').val(data['willTotal']);
	}

	function writeAbilities(data){
		data['abilities'].forEach(function(ability){
			//console.log(ability.id);
			loadAbility(ability.id, 'false');
			sleep(100);
		});
	}

	function sleep(milliseconds) {
		var start = new Date().getTime();
		for (var i = 0; i < 1e7; i++) {
			if ((new Date().getTime() - start) > milliseconds) {
				break;
			}
		}
	}

	function loadAbility(abilityId, rankUp){
		$.ajax({
			url: "/get-data-ability",
			type: "get",
			data: {
				'abilityId'	: abilityId,
				'rankUp'	: rankUp,
			},
			beforeSend: function(){
				console.log("La consulta loadAbility ha salido");
			}
		})
		.success(function(data){
			console.log("La consulta loadAbility ha vuleto "+data['ability'].id);
			$('#totalRank'+data['ability'].id).val(data['totalRank']);
			$('#rank'+data['ability'].id).val(data['ability'].rank);
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			console.log("El servidor no responde...");
		});
	}

	function changeShowDiv(nameDiv){
		var div = document.getElementById(nameDiv);
		if (div.style.display === "none") {
			div.style.display = "block";
		} else {
			div.style.display = "none";
		}
	}

	function learnSpecialAptitude(idCharacter, idAptitude){
		$.ajax({
			url: "/learn-special-aptitude",
			type: "get",
			data: {
				'idCharacter'	: idCharacter,
				'idAptitude'	: idAptitude,
			},
			beforeSend: function(){
				console.log("La consulta learnSpecialAptitude ha salido");
			}
		})
		.success(function(data){
			console.log("La consulta learnSpecialAptitude ha vuleto");
			document.getElementById('btnSP'+data['idAptitude']).disabled = true;
			$('#divSpecialAptitudeLearn').append(data['html'])
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			console.log("El servidor no responde...");
		});
	}

	function learnSpell(idCharacter, idSpell){
		$.ajax({
			url: "/learn-idSpell",
			type: "get",
			data: {
				'idCharacter'	: idCharacter,
				'idSpell'		: idSpell,
			},
			beforeSend: function(){
				console.log("La consulta learnSpell ha salido");
			}
		})
		.success(function(data){
			console.log("La consulta learnSpell ha vuleto");
			document.getElementById('btnSpell'+data['idSpell']).disabled = true;
			$('#divSpellsLearn').append(data['html'])
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			console.log("El servidor no responde...");
		});
	}
</script>
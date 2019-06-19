<?php
Use App\Party;
Use App\Spell;
Use App\Equipment;

$firstTab = true;
?>

@extends('baseLayout')

@section('title')
{{ $party->name }}
@stop

@section('titleDasboard')
{{ $party->name }}
@stop

@section('container')
<input type="hidden" id="idParty" value="{{ $party->id }}">
<div class="widget p-lg">
	<div class="row">
		<!-- CHARACTERS -->
		<div class="col-lg-7">
			<!-- NAV TABS CHARACTER -->
			<div class="m-b-lg nav-tabs-horizontal">
				<ul class="nav nav-tabs" role="tablist">
					@foreach ($party->characters as $character)
					<li role="presentation" class="{{ $firstTab? 'active': '' }}">
						<?php $firstTab = false; ?>
						<a href="#character-{{ $character->id }}" aria-controls="character-{{ $character->id }}" role="tab" data-toggle="tab">
							{{ $character->name }}
						</a>
					</li>
					@endforeach
				</ul>
			</div>
			<!-- END NAV TABS CHARACTER -->
			<?php $firstTab = true; ?>
			<!-- BODY TABS CHARACTER -->
			<div class="tab-content p-md">
				<!-- CHARACTER -->
				@foreach ($party->characters as $character)
				<div role="tabpanel" class="tab-pane fade {{ $firstTab? 'in active': '' }}" id="character-{{ $character->id }}">
					<?php $firstTab = false; ?>
					<!-- HEAD -->
					<div class="row">
						<!-- IMAGE -->
						<div class="col-md-2">
							<center>
								<img src="{{ Config::get('app.url_image_race').'/'.$character->race->name.'.png' }}">
							</center>
						</div>
						<!-- END IMAGE -->
						<!-- INFORMATION -->
						<div class="col-md-10 text-inline-character ">
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
					</div>
					<!-- END HEAD -->
					<!-- BODY -->
					<div class="row">
						<!-- STATS -->
						<div class="col-sm-12">
							<!-- NAV TABS STATS -->
							<div class="m-b-lg nav-tabs-horizontal">
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active">
										<a href="#pincipalStats{{ $character->id }}" aria-controls="pincipalStats{{ $character->id }}" role="tab" data-toggle="tab">
											Atributos
										</a>
									</li>
									<li role="presentation">
										<a href="#abilities{{ $character->id }}" aria-controls="abilities{{ $character->id }}" role="tab" data-toggle="tab">
											Habilidades
										</a>
									</li>
									<li role="presentation">
										<a href="#specialAptitude{{ $character->id }}" aria-controls="specialAptitude{{ $character->id }}" role="tab" data-toggle="tab">
											Aptitudes especiales
										</a>
									</li>
									<li role="presentation">
										<a href="#spells{{ $character->id }}" aria-controls="spells{{ $character->id }}" role="tab" data-toggle="tab">
											Hechizos
										</a>
									</li>
									<li role="presentation">
										<a href="#equipment{{ $character->id }}" aria-controls="equipment{{ $character->id }}" role="tab" data-toggle="tab">
											Equipo
										</a>
									</li>
								</ul>
							</div>
							<!-- END NAV TABS STATS -->
							<!-- BODY TABS STATS -->
							<div class="tab-content p-md">
								<!-- STATS PRINCIPAL -->
								<div role="tabpanel" class="tab-pane fade in active" id="pincipalStats{{ $character->id }}">
									<div class="col-md-6">
										<div class="row">
											<div>
												<div class="col-sm-3">
												</div>
												<div class="col-sm-3">
													<p align="center">Puntuación Caract.</p>
												</div>
												<div class="col-sm-3">
													<p align="center">Modificador Caract.</p>
												</div>
												<div class="col-sm-3">
													<p align="center">Modificador Temporal</p>
												</div>
											</div>
											<!-- STRENGTH -->
											<div>
												<div class="col-sm-3">
													<p align="right">Fuerza</p>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->strength }}" id="strength" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control strengthMod" value="{{ $character->modCharacter('strength') }}" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->strength_temp }}" id="strengthTemp" readonly>
												</div>
											</div>
											<!-- END STRENGTH -->
											<!-- SKILL -->
											<div>
												<div class="col-sm-3">
													<p align="right">Destreza</p>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->skill }}" id="skill" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->skill_temp }}" id="skillTemp" readonly>
												</div>
											</div>
											<!-- END SKILL -->
											<!-- CONSTITUTION -->
											<div>
												<div class="col-sm-3">
													<p align="right">Constitución</p>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->constitution }}" id="constitution" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control constitutionMod" value="{{ $character->modCharacter('constitution') }}" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->constitution_temp }}" id="constitutionTemp" readonly>
												</div>
											</div>
											<!-- END CONSTITUTION -->
											<!-- INTELLIGENCE -->
											<div>
												<div class="col-sm-3">
													<p align="right">Inteligencia</p>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->intelligence }}" id="intelligence" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control intelligenceMod" value="{{ $character->modCharacter('intelligence') }}" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->intelligence_temp }}" id="intelligenceTemp" readonly>
												</div>
											</div>
											<!-- END INTELLIGENCE -->
											<!-- WISDOM -->
											<div>
												<div class="col-sm-3">
													<p align="right">Sabiduría</p>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->wisdom }}" id="wisdom" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control wisdomMod" value="{{ $character->modCharacter('wisdom') }}" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->wisdom_temp }}" id="wisdomTemp" readonly>
												</div>
											</div>
											<!-- END WISDOM -->
											<!-- WISDOM -->
											<div>
												<div class="col-sm-3">
													<p align="right">Carisma</p>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->charisma }}" id="charisma" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control charismaMod" value="{{ $character->modCharacter('charisma') }}" readonly>
												</div>
												<div class="col-sm-3">
													<input type="text" class="form-control editable" value="{{ $character->charisma_temp }}" id="charismaTemp" readonly>
												</div>
											</div>
										</div>
										<!-- END WISDOM -->
										<hr>
										<!-- SAVE THROW FORTITUDE -->
										<div class="row">
											<div class="col-sm-12">
												<p align="left">Tirada de salvación: Fortaleza (Constitución)</p>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" value="{{ $character->fortitudeTotal() }}" id="fortitudeTotal" readonly>
												<p class="no-space">Total</p>
											</div>
											<div class="col-sm-1">
												<h4 align="center">=</h4>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->fortitude_base }}" id="fortitudeBase" readonly>
												<p class="no-space">Salvación Base</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control constitutionMod" value="{{ $character->modCharacter('constitution') }}" readonly>
												<p class="no-space">Modif Const</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->fortitude_mod_var }}" id="fortitudeModVar" readonly>
												<p class="no-space">Modif Vario</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->fortitude_temp }}" id="fortitudeTemp" readonly>
												<p class="no-space">Modif Temp</p>
											</div>
										</div>
										<!-- END SAVING THROW FORTITUDE -->
										<hr class="no-space">
										<!-- SAVIN THROW REFLEX -->
										<div class="row">
											<div class="col-sm-12">
												<p align="left">Tirada de salvación: Reflejos (Destreza)</p>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" value="{{ $character->reflexTotal() }}" id="reflexTotal" readonly>
												<p class="no-space">Total</p>
											</div>
											<div class="col-sm-1">
												<h4 align="center">=</h4>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->reflex_base }}" id="reflexBase" readonly>
												<p class="no-space">Salvación Base</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
												<p class="no-space">Modif Des</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->reflex_mod_var }}" id="reflexModVar" readonly>
												<p class="no-space">Modif Vario</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->reflex_temp }}" id="reflexTemp" readonly>
												<p class="no-space">Modif Temp</p>
											</div>
										</div>
										<!-- END SAVIN THROW REFLEX -->
										<hr class="no-space">
										<!-- SAVIN THROW WILL -->
										<div class="row">
											<div class="col-sm-12">
												<p align="left">Tirada de salvación: Voluntad (Sabiduría)</p>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" value="{{ $character->willTotal() }}" id="willTotal" readonly>
												<p class="no-space">Total</p>
											</div>
											<div class="col-sm-1">
												<h4 align="center">=</h4>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->will_base }}" id="willBase" readonly>
												<p class="no-space">Salvación Base</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control wisdomMod" value="{{ $character->modCharacter('wisdom') }}" readonly>
												<p class="no-space">Modif Sab</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->will_mod_var }}" id="willModVar" readonly>
												<p class="no-space">Modif Vario</p>
											</div>
											<div class="col-sm-2">
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
											<div class="col-sm-4">
												<input type="text" class="form-control editable" value="{{ $character->hit_points_total }}" id="hitPointsTotal" readonly>
												<p class="no-space">P.G. Totales</p>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control editable" value="{{ $character->hit_points_present }}" id="hitPointsPresent" readonly>
												<p class="no-space">P.G. Actuales</p>
											</div>
											<div class="col-sm-4">
												<input type="text" class="form-control editable baseAttackMod" value="{{ $character->base_attack }}" id="baseAttack" readonly>
												<p class="no-space">Ataque Base</p>
											</div>
										</div>
										<!-- END HIT POINT -->
										<hr class="no-space">
										<!-- INITIATIVE -->
										<div class="row">
											<div class="col-sm-3">
												<h4 align="right">Iniciativa</h4>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control" value="{{ $character->initiativeTotal() }}" id="initiativeTotal" readonly>
												<p class="no-space">Total</p>
											</div>
											<div class="col-sm-1">
												<h4 class="no-space">=</h4>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
												<p class="no-space">Modif Des</p>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control editable" value="{{ $character->initiative }}" id="initiative" readonly>
												<p class="no-space">Modif Vario</p>
											</div>
										</div>
										<!-- END INITIATIVE -->
										<hr class="no-space">
										<!-- ARMOR -->
										<div class="row">
											<div class="col-sm-4">
												<h4 align="right">CA Armadura</h4>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control" value="{{ $character->armorTotal() }}" id="armorTotal" readonly>
												<p class="no-space">Total</p>
											</div>
											<div class="col-sm-1">
												<h4 align="center">=</h4>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control editable" value="{{ $character->armor_bonus }}" id="bonusArmor" readonly>
												<p class="no-space">Bonif. Armad</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
												<p class="no-space">Modif Des</p>
											</div>

											<div class="col-sm-1">
												<h4 align="center">+10</h4>
											</div>
										</div>
										<!-- END ARMOR -->
										<hr class="no-space">
										<!-- BMC -->
										<div class="row">
											<div class="col-sm-2">
												<h4 align="right">BMC</h4>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control" value="{{ $character->BMC() }}" id="bmc" readonly>
												<p class="no-space">Total</p>
											</div>
											<div class="col-sm-1">
												<h4 align="center">=</h4>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control baseAttackMod" value="{{ $character->base_attack }}" readonly>
												<p class="no-space">Ataque Base</p>
											</div>
											<div class="col-sm-3">
												<input type="text" class="form-control strengthMod" value="{{ $character->modCharacter('strength') }}" readonly>
												<p class="no-space">Modif Fue</p>
											</div>
										</div>
										<!-- END BMC -->
										<hr class="no-space">
										<!-- DMC -->
										<div class="row">
											<div class="col-sm-2">
												<h4 align="right">DMC</h4>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control" value="{{ $character->DMC() }}" id="dmc" readonly>
												<p class="no-space">Total</p>
											</div>
											<div class="col-sm-1">
												<h4 align="center">=</h4>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control baseAttackMod" value="{{ $character->base_attack }}" readonly>
												<p class="no-space">Ataque Base</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control strengthMod" value="{{ $character->modCharacter('strength') }}" readonly>
												<p class="no-space">Modif Fue</p>
											</div>
											<div class="col-sm-2">
												<input type="text" class="form-control skillMod" value="{{ $character->modCharacter('skill') }}" readonly>
												<p class="no-space">Modif Des</p>
											</div>
											<div class="col-sm-1">
												<h4 align="center">+10</h4>
											</div>
										</div>
										<!-- END DMC -->
										<hr class="no-space">
										<!-- MONEY -->
										<div class="row">
											<div class="col-sm-4">
												<div class="col-sm-4">
													<img class="icon-money-character" src="/assets/images/gold.png">
												</div>
												<div class="col-sm-8">
													<input type="text" class="form-control editable" value="{{ $character->money->gold }}" id="moneyGold" readonly>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="col-sm-4">
													<img class="icon-money-character" src="/assets/images/silver.png">
												</div>
												<div class="col-sm-8">
													<input type="text" class="form-control editable" value="{{ $character->money->silver }}" id="moneySilver" readonly>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="col-sm-4">
													<img class="icon-money-character" src="/assets/images/copper.png">
												</div>
												<div class="col-sm-8">
													<input type="text" class="form-control editable" value="{{ $character->money->copper }}" id="moneyCopper" readonly>
												</div>
											</div>
										</div>
										<!-- END MONEY -->
									</div>
								</div>
								<!-- END BODY TABS STATS -->
								<!-- BODY TABS ABILITIES -->
								<div role="tabpanel" class="tab-pane fade" id="abilities{{ $character->id }}">
									@foreach ($character->abilities as $ability)
									<div class="col-sm-12" align="center">
										<div class="col-sm-1" align="right">
											<i class="glyphicon glyphicon-{{ $ability->special_class? 'check': 'unchecked' }}"></i>
										</div>
										<div class="col-sm-3">
											<p>{{ trans('skills.'.$ability->name) }}</p>
										</div>
										<div class="col-sm-2">
											<input type="text" class="form-control" value="{{ $ability->totalRank() }}" id="totalRank{{ $ability->id }}" readonly>
											<p class="no-space">Total</p>
										</div>
										<div class="col-sm-1">
											<h4 align="center">=</h4>
										</div>
										<div class="col-sm-2">
											<input type="text" class="form-control {{ $ability->skill_base }}Mod" value="{{ $character->modCharacter($ability->skill_base) }}" readonly>
											<p class="no-space">{{ trans('skills.'.$ability->skill_base) }}</p>
										</div>
										<div class="col-sm-2">
											<input type="text" class="form-control" value="{{ $ability->rank }}" id="rank{{ $ability->id }}" readonly>
											<p class="no-space">Rango</p>
										</div>
									</div>
									@endforeach
									<div class="col-sm-12">
										<p>Las habilidades con <i class="glyphicon glyphicon-check"></i> son especiales de clase, por lo que al aprenderlas la primera vez se sumarán puntos de rango automaticamente.</p>
									</div>
								</div>
								<!-- END BODY TABS ABILITIES -->
								<!-- BODY TABS SPECIAL APTITUDE -->
								<div role="tabpanel" class="tab-pane fade" id="specialAptitude{{ $character->id }}">
									<!-- ACORDION LEARN -->
									<div class="row" id="divSpecialAptitudeLearn">
										@forelse ($character->specialAptitudes as $aptitude)
										<div class="col-sm-12">
											<h4 class="panel-title text-primary">{{$aptitude->name}}</h4>
											<p align="justify">{!! $aptitude->description !!}</p>
											<hr>
										</div>
										@empty
										<div class="col-sm-12">
											<h4 class="panel-title text-primary">Ahora mismo no dispone de ninguna</h4>
										</div>
										@endforelse
									</div>
									<!-- END ACORDION LEARN -->
								</div>
								<!-- END BODY TABS SPECIAL APTITUDE -->
								<!-- BODY TABS SPELLS -->
								<div role="tabpanel" class="tab-pane fade" id="spells{{ $character->id }}">
									<!-- SPELL LEARN -->
									<div class="row" id="divSpellsLearn">
										@forelse ($character->spells as $spell)
										<div class="col-sm-1" align="right">
											<span class="label label-success">{{ trans('spell.'.$spell->level()) }}</span>
										</div>
										<div class="col-sm-11">
											<h4 class="panel-title text-primary">{{$spell->name}}</h4>
										</div>
										<div class="col-sm-12">
											<p>{{ $spell->description }}</p>
											<hr>
										</div>
										@empty
										<div class="col-sm-12">
											<h4 class="panel-title text-primary">Ahora mismo no dispone de ninguno</h4>
										</div>
										@endforelse
									</div>
								</div>
								<!-- END BODY TABS SPELLS -->
								<!-- BODY TABS EQUIPMENT -->
								<div role="tabpanel" class="tab-pane fade" id="equipment{{ $character->id }}">
									<!-- WEAPON -->
									<div class="row">
										<div class="row">
											<div class="col-sm-12 text-inline-character" align="right">
												<h4 class="panel-title text-primary">Armas</h4>
											</div>
										</div>
										<!-- EQUIPMENT EQUIP -->
										<div class="row">
											<table class="table table-striped" id="divAddEquipment">
												<tr>
													<th> @lang('objects.name') </th>
													<th class="trweapon"><center> @lang('objects.damage') </center></th>
													<th class="trweapon"><center> @lang('objects.critical') </center></th>
													<th class="trweapon"><center> @lang('objects.range') </center></th>
													<th><center> @lang('objects.weight') </center></th>
												</tr>
												<div>
													@foreach ($character->equipments as $equipment)
													@if ($equipment->isWeapon())
													<tr class="tr{{ $equipment->getType() }}" id="trEquip{{ $equipment->id }}">
														<td>{{ $equipment->name }}</td>
														<td>
															<center>{{ $equipment->damage }}</center>
														</td>
														<td>
															<center>{{ $equipment->critical }}</center>
														</td>
														<td>
															<center>{{ $equipment->range == 0? '-': $equipment->range.' m' }}</center>
														</td>
														<td>
															<center>{{ $equipment->weight.' kg' }}</center>
														</td>
													</tr>
													@endif
													@endforeach
												</div>
											</table>
										</div>
										<!-- END EQUIPMENT EQUIP -->
									</div>
									<!-- END WEAPON -->
									<br>
									<br>
									<!-- ARMOR -->
									<div class="row">
										<div class="col-sm-12 text-inline-character" align="right">
											<h4 class="panel-title text-primary">Armaduras</h4>
										</div>
									</div>
									<!-- EQUIPMENT EQUIP -->
									<div class="row">
										<table class="table table-striped" id="divAddEquipment">
											<tr>
												<th> @lang('objects.name') </th>
												<th class="trarmor"><center> @lang('objects.bonus-armor') </center></th>
												<th class="trarmor"><center> @lang('objects.penality') </center></th>
												<th><center> @lang('objects.weight') </center></th>
											</tr>
											<div>
												@foreach ($character->equipments as $equipment)
												@if (!$equipment->isWeapon())
												<tr class="tr{{ $equipment->getType() }}" id="trEquip{{ $equipment->id }}">
													<td>{{ $equipment->name }}</td>
													<td>
														<center>{{ $equipment->bonus_armor }}</center>
													</td>
													<td>
														<center>{{ $equipment->penality }}</center>
													</td>
													<td>
														<center>{{ $equipment->weight.' kg' }}</center>
													</td>
												</tr>
												@endif
												@endforeach
											</div>
										</table>
									</div>
									<!-- END EQUIPMENT EQUIP -->
									<!-- END ARMOR -->
								</div>
								<!-- END BODY TABS EQUIPMENT -->
							</div>
						</div>
						<!-- END STATS -->
					</div>
					<!-- END BODY -->
				</div>
				@endforeach
				<!-- CHARACTER -->
			</div>
		</div>
		<!-- END CHARACTERS -->
		<!-- DICES & CHAT -->
		<div class="col-lg-5">
			<!-- DICES -->
			<div class="col-sm-3" align="center">
				<div style="padding: 10px;">
					<button id="btn" class="btn mv-md btn-inverse" onclick="throwingDice(4)">
						D4
					</button>
				</div>
				<div style="padding: 10px;">
					<button id="btn" class="btn mv-md btn-inverse" onclick="throwingDice(6)">
						D6
					</button>
				</div>
				<div style="padding: 10px;">
					<button id="btn" class="btn mv-md btn-inverse" onclick="throwingDice(8)">
						D8
					</button>
				</div>
				<div style="padding: 10px;">
					<button id="btn" class="btn mv-md btn-inverse" onclick="throwingDice(10)">
						D10
					</button>
				</div>
				<div style="padding: 10px;">
					<button id="btn" class="btn mv-md btn-inverse" onclick="throwingDice(12)">
						D12
					</button>
				</div>
				<div style="padding: 10px;">
					<button id="btn" class="btn mv-md btn-inverse" onclick="throwingDice(20)">
						D20
					</button>
				</div>
				<div style="padding: 10px;">
					<button id="btn" class="btn mv-md btn-inverse" onclick="throwingDice(100)">
						D100
					</button>
				</div>
			</div>
			<!-- END DICES -->
			<!-- CHAT -->
			<input type="hidden" id="idFirstChatReadSesion" value="{{ $party->last_chat_read_master }}">
			<div class="col-sm-9">
				<div class="list-group">
					<a class="list-group-item active">
						<h4 class="list-group-item-heading" align="center">Chat de la partida</h4>
					</a>
					<!-- BODY CHAT -->
					<div id="divScroll" class="scroll-chat-master" align="center">
						<button id="btnOldMessages" class="btn mv-md btn-inverse" onclick="paginateOldMessages()" style="margin: 20px;">
							<i class="glyphicon glyphicon-send"></i>
							Cargar más antigüos
						</button>
						<div id="chatContent"></div>
					</div>
					<!-- END BODY CHAT -->
				</div>
				<!-- CHAT SEND -->
				<div>
					<div class="col-md-10">
						<input type="text" class="form-control" id="inputChat" onkeyup="onKeyUp(event)">
					</div>
					<div class="col-md-2">
						<button id="btnSendChat" class="btn mv-md btn-inverse" onclick="pushSendData()">
							<i class="glyphicon glyphicon-send"></i>
							Enviar
						</button>
					</div>
				</div>
				<!-- END CHAT SEND -->
			</div>
			<!-- END CHAT -->
		</div>
		<!-- END DICES & CHAT -->
	</div>
</div>
@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	var page = 1;

	$(document).ready(function(){
		function updateChat(){
			sendMessage();
		}
		sendMessage();
		setInterval(updateChat, 2000);
	});

	function pushSendData(){
		sendMessage($('#inputChat').val());
		$('#inputChat').val('');
		$("#divScroll").animate({ scrollTop: $('#divScroll').prop("scrollHeight")}, 1000);
	}

	function onKeyUp(event) {
		var keycode = event.keyCode;
		if(keycode == '13'){
			pushSendData();
		}
	}

	function throwingDice(dice){
		var message = 'D'  + dice + ' => ' + (Math.floor(Math.random() * (dice - 1) + 1)) + '';
		sendMessage(message, true);
		$("#divScroll").animate({ scrollTop: $('#divScroll').prop("scrollHeight")}, 1000);
	}

	function paginateOldMessages(){
		$.ajax({
			url: "/old-messages-master?page=" + page,
			type: "get",
			data: {
				"idParty" 			: document.getElementById('idParty').value,
				"firstOldMessage" : $('#idFirstChatReadSesion').val(),
			},
			beforeSend: function(){
				page++;
			}
		})
		.done(function(data){
			if (data['html'] == ''){
				$('#btnOldMessages').hide();
			}
			$('#chatContent').prepend(data['html']);
			$('#divScroll').scrollTop($('#divScroll').scrollTop() + 1370)

		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			console.log("El servidor no responde...");
		});
	}

	function sendMessage(message, isThrow){
		$.ajax({
			url: "/send-message-master",
			type: "get",
			data: {
				"idParty" 		: document.getElementById('idParty').value,
				"message"		: message,
				'isThrow'		: isThrow,
			},
			beforeSend: function(){
				console.log("La consulta sendMessage ha salido");
			}
		})
		.success(function(data){
			console.log("La consulta sendMessage ha vuelto");
			if (data['html'] != ''){
				$('#chatContent').append(data['html']);
			}
		})
		.fail(function(jqXHR, ajaxOptions, thrownError){
			console.log("El servidor no responde...");
		});
	}
</script>
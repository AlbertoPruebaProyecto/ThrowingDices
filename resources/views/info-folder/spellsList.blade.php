<?php
use App\Spell;
?>

@extends('baseLayout')

@section('title')
@lang('menu.spells')
@stop

@section('titleDasboard')
@lang('menu.spells')
@stop

@section('container')
<div class="col-md-12">
	<div class="widget">
		<div class="m-b-lg nav-tabs-horizontal">
			<!-- tabs list -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#bard" aria-controls="bard" role="tab" data-toggle="tab"> @lang('classes.name-bard') </a>
				</li>
				<li role="presentation">
					<a href="#paladin" aria-controls="paladin" role="tab" data-toggle="tab"> @lang('classes.name-paladin') </a>
				</li>
			</ul><!-- .nav-tabs -->

			<!-- tab-content  -->
			<div class="tab-content p-md">

				@foreach (['bard', 'paladin'] as $schoolSpell) <!-- Classes -->
				<div role="tabpanel" class="tab-pane fade {{ $schoolSpell == 'bard'? 'in active': '' }}" id="{{ $schoolSpell }}">
					<h3 class="m-b-md"> @lang('classes.name-'.$schoolSpell) </h3>
					<div class="panel-group accordion" id="accordion-{{ $schoolSpell }}" role="tablist" aria-multiselectable="true">

						@for ($level = 0; $level <= 6; $level++) <!-- Levels -->

						@if (Spell::where('school', '=', $schoolSpell.'-level'.$level)->first()) <!-- for no show levels empty -->
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading-{{ $schoolSpell.$level }}">
								<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion-{{ $schoolSpell }}" href="#collapse-{{$schoolSpell.$level }}" aria-expanded="false" aria-controls="collapse-{{ $schoolSpell.$level }}">
									<h4 class="panel-title"> @lang('spell.level'.$level) </h4>
									<i class="fa acc-switch"></i>
								</a>
							</div>
							<div id="collapse-{{ $schoolSpell.$level }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $schoolSpell.$level }}">
								<div class="panel-body">

									@foreach (Spell::where('school', '=', $schoolSpell.'-level'.$level)->get() as $element)
									<div class="text-inline">
										<h4>{{ $element->name }}: </h4>
										<p>{{ $element->description }}</p>
									</div>
									@endforeach

								</div>
							</div>
						</div>
						@endif

						@endfor

					</div><!-- panel-group -->
				</div>
				@endforeach
			</div><!-- .tab-content  -->
		</div><!-- .nav-tabs-horizontal -->
	</div><!-- .widget -->
</div><!-- END column -->
@stop
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
					<a href="#bard" aria-controls="tab-3" role="tab" data-toggle="tab"> @lang('classes.name-bard') </a>
				</li>
				<li role="presentation">
					<a href="#tab-2" aria-controls="tab-1" role="tab" data-toggle="tab"> @lang('classes.name-paladin') </a>
				</li>
				<li role="presentation">
					<a href="#tab-3"  aria-controls="tab-2" role="tab" data-toggle="tab">Hechizos comunes</a>
				</li>
			</ul><!-- .nav-tabs -->

			<!-- Tab panes -->
			<div class="tab-content p-md">
				<div role="tabpanel" class="tab-pane in active fade" id="bard">
					<h3 class="m-b-md"> @lang('classes.name-bard') </h3>
					<div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">

						@for ($i = 0; $i < 2; $i++)
						<h4 class="m-b-md"> @lang('spell.level'.$i) </h4>

						@foreach (Spell::where('school', '=', 'bard-level'.$i)->get() as $element)
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="heading-{{ $element->id }}">
								<a class="accordion-toggle" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-{{ $element->id }}" aria-expanded="true" aria-controls="collapse-{{ $element->id }}">
									<h4 class="panel-title">{{ $element->name }}</h4>
									<i class="fa acc-switch"></i>
								</a>
							</div>
							<div id="collapse-{{ $element->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-{{ $element->id }}">
								<div class="panel-body">
									<p>{{ $element->description }}</p>
								</div>
							</div>
						</div>
						@endforeach
						@endfor

					</div><!-- panel-group -->
				</div><!-- .tab-pane  -->

				<div role="tabpanel" class="tab-pane fade" id="tab-2">
					<h4 class="m-b-md">Second Tab Content</h4>
					<p class="lh-lg">Lorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Officia illo aspernatur facilis, nisi commodi dolor?</p>
				</div><!-- .tab-pane  -->

				<div role="tabpanel" class="tab-pane fade" id="tab-3">
					<h4 class="m-b-md">Third Tab Content</h4>
					<p class="lh-lg">Lorem ipsum dolor sit amet. ipsum dolor sit amet, consectetur adipisicing elit. Officia illo aspernatur facilis, nisi commodi dolor?</p>
				</div><!-- .tab-pane  -->
			</div><!-- .tab-content  -->
		</div><!-- .nav-tabs-horizontal -->
	</div><!-- .widget -->
</div><!-- END column -->
@stop
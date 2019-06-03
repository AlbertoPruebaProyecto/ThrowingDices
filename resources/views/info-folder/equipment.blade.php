<?php
use App\Equipment;
?>

@extends('baseLayout')

@section('title')
@lang('menu.'.$filter)
@stop

@section('titleDasboard')
@lang('menu.'.$filter)
@stop

@section('container')
<div class="col-sm-12">
	<div class="widget no-glutter p-lg">
		<h3 class="widget-title fz-lg m-b-lg"> @lang('menu.'.$filter) </h3>


		<div class="m-b-lg nav-tabs-horizontal">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a onclick="filter('all')" href="#" role="tab" data-toggle="tab">
						@lang('objects.all')
					</a>
				</li>

				@if ($filter == 'weapon')
				<li role="presentation">
					<a onclick="filter('no-weapon')" href="#" role="tab" data-toggle="tab">
						@lang('objects.no-weapon')
					</a>
				</li>
				<li role="presentation">
					<a onclick="filter('body_to_body-light')" href="#" role="tab" data-toggle="tab">
						@lang('objects.body_to_body-light')
					</a>
				</li>
				<li role="presentation">
					<a onclick="filter('body_to_body-1_hand')" href="#" role="tab" data-toggle="tab">
						@lang('objects.body_to_body-1_hand')
					</a>
				</li>
				<li role="presentation">
					<a onclick="filter('body_to_body-2_hand')" href="#" role="tab" data-toggle="tab">
						@lang('objects.body_to_body-2_hand')
					</a>
				</li>
				<li role="presentation">
					<a onclick="filter('weapon-range')" href="#" role="tab" data-toggle="tab">
						@lang('objects.weapon-range')
					</a>
				</li>
				@endif
				@if ($filter == 'armor')
				<li role="presentation">
					<a onclick="filter('armor-light')" href="#" role="tab" data-toggle="tab">
						@lang('objects.armor-light')
					</a>
				</li>
				<li role="presentation">
					<a onclick="filter('armor-medium')" href="#" role="tab" data-toggle="tab">
						@lang('objects.armor-medium')
					</a>
				</li>
				<li role="presentation">
					<a onclick="filter('armor-heavy')" href="#" role="tab" data-toggle="tab">
						@lang('objects.armor-heavy')
					</a>
				</li>
				<li role="presentation">
					<a onclick="filter('shield')" href="#" role="tab" data-toggle="tab">
						@lang('objects.shield')
					</a>
				</li>
				@endif

			</ul><!-- .nav-tabs -->
		</div>


		<table class="table table-striped">
			<tbody>
				<tr>
					<th> @lang('objects.name') </th>
					<th><center> @lang('objects.cost') </center></th>

					@if ($filter == 'weapon')
					<th><center> @lang('objects.damage') </center></th>
					<th><center> @lang('objects.critical') </center></th>
					<th><center> @lang('objects.range') </center></th>
					@endif
					@if ($filter == 'armor')
					<th><center> @lang('objects.bonus-armor') </center></th>
					<th><center> @lang('objects.penality') </center></th>
					@endif

					<th><center> @lang('objects.weight') </center></th>
				</tr>

				@foreach (Equipment::where('type', 'LIKE', $filter.'%')->get() as $element)
				<tr class="equipment {{ $element->getTypeEquipment() }}">
					<td>{{ $element->name }}</td>
					<td><center>
						<img class="icon-money" src="/assets/images/gold.png">{{ $element->money->gold }}&nbsp;&nbsp;
						<img class="icon-money" src="/assets/images/silver.png">{{ $element->money->silver }}&nbsp;&nbsp;
						<img class="icon-money" src="/assets/images/copper.png">{{ $element->money->copper }}
					</center></td>

					@if ($filter == 'weapon')
					<td><center>{{ $element->damage }}</center></td>
					<td><center>{{ $element->critical }}</center></td>
					<td><center>{{ $element->range == 0? '-': $element->range.' m' }}</center></td>
					@endif
					@if ($filter == 'armor')
					<td><center>{{ $element->bonus_armor }}</center></td>
					<td><center>{{ $element->penality }}</center></td>
					@endif

					<td><center>{{ $element->weight.' kg' }}</center></td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>
@stop

<script>
	function filter(option){
		if (option == 'all'){
			$('.equipment').show();
		}else{
			$('.equipment').hide();
			$('.'+option).show();
		}
	}
</script>
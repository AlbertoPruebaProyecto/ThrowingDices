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

		@if ($filter == 'weapon')
		<div class="m-b-lg nav-tabs-horizontal">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active">
					<a href="#" role="tab" data-toggle="tab"> @lang('objects.all') </a>
				</li>
				<li role="presentation">
					<a href="#" role="tab" data-toggle="tab"> @lang('objects.no-weapon') </a>
				</li>
				<li role="presentation">
					<a href="#" role="tab" data-toggle="tab"> @lang('objects.body_to_body-light') </a>
				</li>
				<li role="presentation">
					<a href="#" role="tab" data-toggle="tab"> @lang('objects.body_to_body-1_hand') </a>
				</li>
				<li role="presentation">
					<a href="#" role="tab" data-toggle="tab"> @lang('objects.body_to_body-2_hand') </a>
				</li>
				<li role="presentation">
					<a href="#" role="tab" data-toggle="tab"> @lang('objects.weapon-range') </a>
				</li>
			</ul><!-- .nav-tabs -->
		</div>
		@endif

		<table class="table table-striped">
			<tbody>
				<tr>
					<th> @lang('objects.name') </th>
					<th><center> @lang('objects.cost') </center></th>
					<th><center> @lang('objects.damage') </center></th>
					<th><center> @lang('objects.critical') </center></th>
					<th><center> @lang('objects.range') </center></th>
					<th><center> @lang('objects.weight') </center></th>
				</tr>

				@foreach (Equipment::where('type', 'LIKE', $filter.'%')->get() as $element)
				<tr class="equipment {{ explode(";", $element->type)[1] }}">
					<td>{{ $element->name }}</td>
					<td><center>
						<img class="icon-money" src="/assets/images/gold.png">{{ $element->money->gold }}&nbsp;&nbsp;
						<img class="icon-money" src="/assets/images/silver.png">{{ $element->money->silver }}&nbsp;&nbsp;
						<img class="icon-money" src="/assets/images/copper.png">{{ $element->money->copper }}
					</center></td>
					<td><center>{{ $element->damage }}</center></td>
					<td><center>{{ $element->critical }}</center></td>
					<td><center>{{ $element->range == 0? '-': $element->range.' m' }}</center></td>
					<td><center>{{ $element->weight.' kg' }}</center></td>
				</tr>
				@endforeach

			</tbody>
		</table>
	</div>
</div>
@stop
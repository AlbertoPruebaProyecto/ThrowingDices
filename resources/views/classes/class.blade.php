<?php
use App\Classpj;
$classSelected = Classpj::where('name', $className)->first();
?>

@extends('baseLayout')

@section('title')
@lang('menu.'.$classSelected->name)
@stop

@section('titleDasboard')
@lang('menu.'.$classSelected->name)
@stop

@section('container')

<div class="row">
	<div class="col-md-8" style="padding: 0px;">
		<div class="col-sm-12">
			<div class="widget no-glutter p-lg">
				<h3 class="widget-title fz-lg m-b-lg"> @lang('classes.name-'.$classSelected->name) </h3>
				<p class="m-b-lg"> @lang('classes.desc-'.$classSelected->name) </p>
			</div>
		</div>
		<div class="col-md-8">
			<div class="widget no-glutter p-lg">
				<h4 class="widget-title"> @lang('classes.title-rol') </h4>
				<p class="m-b-lg"> @lang('classes.rol-'.$classSelected->name) </p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="widget no-glutter p-lg">
				<h4 class="widget-title"> @lang('classes.title-alignment') </h4>
				<p class="m-b-lg"> @lang('classes.alignment-'.$classSelected->name) </p>
			</div>
			<div class="widget no-glutter p-lg">
				<h4 class="widget-title"> @lang('classes.title-dice') </h4>
				<p class="m-b-lg"> @lang('classes.dice-'.$classSelected->name) </p>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="widget no-glutter p-lg">
			<center>
				<img src="{{ Config::get('app.url_image_class').'/'.$classSelected->name.'.jpg' }}">
			</center>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-9">
		<div class="widget no-glutter p-lg">
			<h4 class="widget-title"> @lang('classes.title-levelup') </h4>
			<table class="table table-striped">
				<tbody>
					<tr>
						<th> @lang('classes.title-table-level') </th>
						<th> @lang('classes.title-table-atack') </th>
						<th> @lang('classes.title-table-strenght') </th>
						<th> @lang('classes.title-table-reflection') </th>
						<th> @lang('classes.title-table-will') </th>
						<th> @lang('classes.title-table-special') </th>
					</tr>
					@foreach ($classSelected->SkillLevelUp as $element)
					<tr>
						<td>{{ $element->level }}</td>
						<td>{{ $element->base_atack }}</td>
						<td>{{ $element->strenght }}</td>
						<td>{{ $element->reflection }}</td>
						<td>{{ $element->will }}</td>
						<td>{{ $element->special }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div class="col-md-3">
		<div class="widget no-glutter p-lg">
			<h4 class="widget-title"> @lang('classes.title-skills') </h4>
			<table class="table table-striped">
				<tbody>
					@foreach (explode(";", $classSelected->class_skills) as $element)
					<tr>
						<td><center> @lang('skills.'.$element) </center></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop
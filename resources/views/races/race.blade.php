@extends('baseLayout')

@section('title')
@lang('menu.'.$race)
@stop

@section('titleDasboard')
@lang('menu.'.$race)
@stop

@section('container')

<div class="row">
	<div class="col-md-8" style="padding: 0px;">
		<div class="col-sm-12">
			<div class="widget no-glutter p-lg">
				<h3 class="widget-title fz-lg m-b-lg"> @lang('race.name-'.$race) </h3>
				<p class="m-b-lg"> @lang('race.desc-'.$race) </p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="widget no-glutter p-lg">
				<h4 class="widget-title"> @lang('race.title-desc-physical') </h4>
				<p class="m-b-lg"> @lang('race.desc-physical-'.$race) </p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="widget no-glutter p-lg">
				<h4 class="widget-title"> @lang('race.title-society') </h4>
				<p class="m-b-lg"> @lang('race.society-'.$race) </p>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="widget no-glutter p-lg">
			<center>
				<img src="{{ Config::get('app.url_image_race').'/'.$race.'.png' }}">
			</center>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="widget no-glutter p-lg">
			<h4 class="widget-title"> @lang('race.title-relations') </h4>
			<p class="m-b-lg"> @lang('race.relation-'.$race) </p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="widget no-glutter p-lg">
			<h4 class="widget-title"> @lang('race.title-alignment') </h4>
			<p class="m-b-lg"> @lang('race.alignment-'.$race) </p>
		</div>
	</div>

	<div class="col-md-4">
		<div class="widget no-glutter p-lg">
			<h4 class="widget-title"> @lang('race.title-adventure') </h4>
			<p class="m-b-lg"> @lang('race.adventure-'.$race) </p>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="widget no-glutter p-lg">
			<h3 class="widget-title"> @lang('race.title-racial') </h3>
			<p class="m-b-lg"> @lang('race.racial-'.$race) </p>
		</div>
	</div>
</div>

@stop


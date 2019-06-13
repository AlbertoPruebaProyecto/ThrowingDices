@extends('baseLayout')

@section('title')
@lang('menu.index')
@stop

@section('titleDasboard')
@lang('menu.index')
@stop

@section('container')

<div class="row">
	<div class="col-sm-12">
		<div class="widget no-glutter p-lg">
			<h3 class="widget-title fz-lg m-b-lg"> ¡¡Bienvenido!! </h3>
		</div>
	</div>
	<div class="col-sm-12">
		<div class="widget no-glutter p-lg">
			<img src="{{ Config::get('app.url_image_party').'/'.$party->image }}"  style="max-height: 200px;">
		</div>
	</div>
</div>

@stop
@extends('baseLayout')

@section('title')
@lang('menu.index')
@stop

@section('titleDasboard')
@lang('menu.index')
@stop

@section('container')

<div class="row">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="widget no-glutter p-lg">
			<center>
				<h3 class="widget-title fz-lg m-b-lg"> Meme aleatorio </h3>
				<img src="{{ Config::get('app.url_img_memes').'/'.rand(1, 7).'.jpg' }}">
			</center>
		</div>
	</div>
</div>

@stop
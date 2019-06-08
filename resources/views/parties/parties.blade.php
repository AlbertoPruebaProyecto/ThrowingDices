<?php
Use App\Party;
?>

@extends('baseLayout')

@section('title')
@lang('menu.myParties')
@stop

@section('titleDasboard')
@lang('menu.myParties')
@stop

@section('container')

@if ( Session::has('send') )
<div class="alert alert-success margin-b-30">
	<center>
		{{Session::get('send')}}
	</center>
</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger margin-b-30">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<div class="row">
	<div class="col-sm-12">
		<div class="widget no-glutter p-lg">
			<h3 class="widget-title fz-lg m-b-lg"> Partidas en las que soy el master </h3>
		</div>
	</div>

	@forelse (Party::where('master_id', '=', Auth::id())->orderby('updated_at', 'desc')->get() as $party)
	<div class="col-lg-3 col-md-4 col-sm-6">
		<a href="show-party-master/{{ $party->id }}" class="m-r-xs theme-color">
			<div class="thumbnail white">
				<img src="{{ Config::get('app.url_image_party').'/'.$party->image }}">
				<center>
					<h3> {{ $party->name }} </h3>
					<p>{{ $party->description }}</p>
					<span class="label label-info">
						@lang('parties.players'): {{ count($party->characters).' / '.$party->num_players }}
					</span>
					<span class="label label-{{ $party->isActive()? 'success': 'danger'}}">
						{{trans('parties.'.$party->state) }}
					</span>
				</center>
			</div>
		</a>
	</div>
	@empty
	<div class="col-sm-12">
		<div class="widget no-glutter p-lg">
			<h3 class="widget-title fz-lg m-b-lg"> No dispones de ninguna partida donde seas el master </h3>
		</div>
	</div>
	@endforelse
</div>

<div class="row">
	<div class="col-sm-12">
		<div class="widget no-glutter p-lg">
			<h3 class="widget-title fz-lg m-b-lg"> Partidas en las que soy un jugador </h3>
		</div>
	</div>

	@foreach (Party::orderby('updated_at', 'desc')->get() as $party)
	@if ($party->isJoin(Auth::id()))

	<div class="col-lg-3 col-md-4 col-sm-6">
		<a href="show-party-character/{{ $party->id }}" class="m-r-xs theme-color">
			<div class="thumbnail white">
				<img src="{{ Config::get('app.url_image_party').'/'.$party->image }}">
				<center>
					<h3> {{ $party->name }} </h3>
					<p>{{ $party->description }}</p>
					<span class="label label-info">
						@lang('parties.players'): {{ count($party->characters).' / '.$party->num_players }}
					</span>
					<span class="label label-{{ $party->isActive()? 'success': 'danger'}}">
						{{trans('parties.'.$party->state) }}
					</span>
				</center>
			</div>
		</a>
	</div>
	@endif
	@endforeach
</div>

@stop
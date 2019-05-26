<?php
Use App\Party;
?>

@extends('baseLayout')

@section('title')
@lang('menu.joinParty')
@stop

@section('titleDasboard')
@lang('menu.joinParty')
@stop

@section('container')

@foreach (Party::where('master_id', '!=', Auth::id())->where('state', '=', 'onPrepare')->get() as $party)
<div class="col-lg-3 col-md-4 col-sm-6">
	<a href="javascrip:void(0)" class="m-r-xs theme-color">
		<div class="thumbnail white">
			<img src="{{ Config::get('app.url_image_party').'/'.$party->image }}"  style="max-height: 200px;">
			<center>
				<h3> {{ $party->name }} </h3>
				<p>{{ $party->description }}</p>
				<span class="label label-info">Jugadores: 1/4</span>
				<span class="label label-purple">No estás unido</span>
			</center>
		</div>
	</a>
</div>
@endforeach

@stop
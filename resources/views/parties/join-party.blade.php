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

@if (count($errors) > 0)
<div class="alert alert-danger margin-b-30">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@foreach (Party::where('state', '=', 'onPrepare')->get() as $party)
<div class="col-lg-3 col-md-4 col-sm-6">
	<a href="join-party/{{ $party->id }}" class="m-r-xs theme-color">
		<div class="thumbnail white">
			<img src="{{ Config::get('app.url_image_party').'/'.$party->image }}"  style="max-height: 200px;">
			<center>
				<h3> {{ $party->name }} </h3>
				<p>{{ $party->description }}</p>

				<span class="label label-info">
					@lang('parties.players'): {{ count($party->characters).' / '.$party->num_players }}
				</span>

				@if ($party->isMaster(Auth::id()))
				<span class="label label-purple"> @lang('parties.isMaster') </span>
				@else
				<span class="label label-purple">
					{{ $party->isJoin(Auth::id())? trans('parties.joined'): trans('parties.notJoined') }}
				</span>
				@endif

			</center>
		</div>
	</a>
</div>
@endforeach

@stop
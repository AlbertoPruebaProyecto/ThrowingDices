@extends('baseLayout')

@section('title')
@lang('menu.myParties')
@stop

@section('titleDasboard')
@lang('menu.myParties')
@stop

@section('container')

@if ( Session::has('send') )
<div class="col-12">
	<div class="thumbnail white">
		<div class="alert alert-success margin-b-30">
			<center>
				{{Session::get('send')}}
			</center>
		</div>
	</div>
</div>
@endif

@for ($i = 1; $i < 13; $i++)
<div class="col-lg-3 col-md-4 col-sm-6">
	<a href="javascrip:void(0)" class="m-r-xs theme-color">
		<div class="thumbnail white">
			<img src="assets/images/dices_rock.jpg"  style="max-height: 200px;">
			<center>
				<h3> @lang('main.party') {{ $i }}</h3>
				<p>Esto es una breve descripción</p>
				<span class="label label-inverse">jugador/master</span>
				<span class="label label-success">Activa/pausa/suspendida</span>
			</center>
		</div>
	</a>
</div>
<div class="col-lg-3 col-md-4 col-sm-6">
	<a href="javascrip:void(0)" class="m-r-xs theme-color">
		<div class="thumbnail white">
			<img src="assets/images/d20.png" style="max-height: 200px;">
			<center>
				<h3>PARTIDA {{ $i }}</h3>
				<p>Esto es una breve descripción</p>
				<span class="label label-inverse">jugador/master</span>
				<span class="label label-success">Activa/pausa/suspendida</span>
			</center>
		</div>
	</a>
</div>
@endfor

@stop
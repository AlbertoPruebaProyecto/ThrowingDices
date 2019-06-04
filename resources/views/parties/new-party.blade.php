@extends('baseLayout')

@section('title')
@lang('menu.newParty')
@stop

@section('titleDasboard')
@lang('menu.newParty')
@stop

@section('container')
<div class="widget">
	<header class="widget-header">
		<center>
			<h4>
				@lang('parties.titleNewParty')
			</h4>
		</center>
	</header>
	<hr class="widget-separator">
	<div class="widget-body">
		<div class="m-b-lg">
			<p>
				@lang('parties.descNewParty')
			</p>
		</div>

		@if (count($errors) > 0)
		<div class="alert alert-danger margin-b-30">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif

		<form class="form-horizontal" action="/form-new-party" method="post" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<div class="form-group">
				<label for="name" class="col-sm-2 col-sm-offset-2 control-label">
					@lang('parties.nameFormNewParty')
				</label>
				<div class="col-sm-5">
					<input type="text" name="name" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="description" class="col-sm-2 col-sm-offset-2 control-label">
					@lang('parties.descFormNewParty')
				</label>
				<div class="col-sm-5">
					<input type="text" name="description" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="numPlayers" class="col-sm-2 col-sm-offset-2 control-label">
					@lang('parties.numFormNewParty')
				</label>
				<div class="col-sm-5">
					<input type="text" name="numPlayers" class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label for="image" class="col-sm-2 col-sm-offset-2 control-label">
					@lang('parties.imgFormNewParty')
				</label>
				<div class="col-sm-5">
					<input type="file" name="image" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 col-sm-offset-4">
					<button type="submit" class="btn btn-inverse">
						@lang('parties.btnFormNewParty')
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
@stop
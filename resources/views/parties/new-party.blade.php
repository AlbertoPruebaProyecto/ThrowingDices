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
				<div for="image" class="col-sm-2 col-sm-offset-2 control-label">
					<label>
						@lang('parties.imgFormNewParty')
					</label>
					<select name="image" id="selectImage" class="form-control" onchange="changeImage()">
						@for ($i = 1; $i <= 6; $i++)
						<option value="image_{{ $i }}">Imagen {{ $i }}</option>
						@endfor
					</select>
				</div>
				<div class="col-sm-5">
					@for ($i = 1; $i <= 6; $i++)
					<div {{ $i == 1? '': 'hidden' }} class="all-images image_{{ $i }}">
						<img src="{{ Config::get('app.url_image_party').'/image_'.$i.'.jpg' }}">
					</div>
					@endfor
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	function changeImage(){
		var numImage = document.getElementById("selectImage").value;
		console.log(numImage);
		$('.all-images').hide();
		$('.'+numImage).show();
	}
</script>
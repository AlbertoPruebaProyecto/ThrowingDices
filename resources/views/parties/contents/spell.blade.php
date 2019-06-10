<div class="col-md-1" align="right">
	<span class="label label-success">{{ trans('spell.'.$spell->level()) }}</span>
</div>
<div class="col-md-11">
	<h4 class="panel-title text-primary">{{$spell->name}}</h4>
</div>
<div class="col-md-12">
	<p>{{ $spell->description }}</p>
	<hr>
</div>
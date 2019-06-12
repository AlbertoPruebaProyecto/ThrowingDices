@foreach ($chats as $chat)

@if (!$chat->is_master)
@if ($chat->is_throw)
<a class="list-group-item bg-info" style="margin: 10px; border-radius: 10px; margin-left: 130px; margin-right: 130px;">
	<div>
		<h4 class="list-group-item-heading"  align="center">{!! $chat->character->name.' <br> '.$chat->message !!}</h4>
	</div>
</a>
@else
<a class="list-group-item {{ $chat->is_throw? 'bg-info': '' }}" style="margin: 10px; border-radius: 10px; {{ $chat->character_id == $characterId? 'margin-left: 50px;': 'margin-right: 50px;' }}">
	<div>
		<p align="{{ $chat->character_id == $characterId? 'right': 'left' }}">
			{{ $chat->character->name }}
		</p>
		@if ($chat->is_throw)
		<h4 class="list-group-item-heading"  align="center">{{ $chat->message }}</h4>
		@else
		<h4 class="list-group-item-heading"   align="left">{{ $chat->message }}</h4>
		@endif

	</div>
</a>
@endif
@else
@if ($chat->is_throw)
<a class="list-group-item bg-info" style="margin: 10px; border-radius: 10px; margin-left: 130px; margin-right: 130px;">
	<div>
		<h4 class="list-group-item-heading"  align="center">{!! 'Master <br> '.$chat->message !!}</h4>
	</div>
</a>
@else
<a class="list-group-item {{ $chat->is_throw? 'bg-info': '' }}" style="margin: 10px; border-radius: 10px; margin-left: 80px; margin-right: 80px;">
	<div>
		<p align="center">
			{{ 'Master' }}
		</p>
		@if ($chat->is_throw)
		<h4 class="list-group-item-heading"  align="center" style="font-style: italic;">{{ $chat->message }}</h4>
		@else
		<h4 class="list-group-item-heading"   align="left" style="font-style: italic;">{{ $chat->message }}</h4>
		@endif

	</div>
</a>
@endif
@endif

@endforeach
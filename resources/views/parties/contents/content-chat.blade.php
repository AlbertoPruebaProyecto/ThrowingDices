@foreach ($chats as $chat)
@if ($chat->is_throw)
<a class="list-group-item bg-info" style="margin: 10px; border-radius: 10px; margin-left: 130px; margin-right: 130px;">
	<div>
		<h4 class="list-group-item-heading"  align="center">{!! $chat->character->name.' <br> '.$chat->message !!}</h4>
	</div>
</a>
@else
<a class="list-group-item {{ $chat->is_throw? 'bg-info': '' }}" style="margin: 10px; border-radius: 10px; {{ $chat->character_id == $character->id? 'margin-left: 50px;': 'margin-right: 50px;' }}">
	<div>
		<p align="{{ $chat->character_id == $character->id? 'right': 'left' }}">
			{{ $chat->character->name.' => '.$chat->id }}
		</p>
		@if ($chat->is_throw)
		<h4 class="list-group-item-heading"  align="center">{{ $chat->message }}</h4>
		@else
		<h4 class="list-group-item-heading"   align="right">{{ $chat->message }}</h4>
		@endif

	</div>
</a>
@endif
@endforeach
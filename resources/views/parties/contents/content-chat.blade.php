@foreach ($chats as $chat)
<a class="list-group-item">
	<h4 class="list-group-item-heading">{{ $chat->character->name }}</h4>
	<p>{{ $chat->message }}</p>
</a>
<?php
$chat->character->last_chat_read = $chat->id;
$chat->character->save();
?>
@endforeach
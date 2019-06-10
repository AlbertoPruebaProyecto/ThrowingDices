<tr class="tr{{ $equipment->getType() }}" id="trEquip{{ $equipment->id }}">
	<td>{{ $equipment->name }}</td>
	@if ($equipment->isWeapon())
	<td>
		<center>{{ $equipment->damage }}</center>
	</td>
	<td>
		<center>{{ $equipment->critical }}</center>
	</td>
	<td>
		<center>{{ $equipment->range == 0? '-': $equipment->range.' m' }}</center>
	</td>
	@else
	<td>
		<center>{{ $equipment->bonus_armor }}</center>
	</td>
	<td>
		<center>{{ $equipment->penality }}</center>
	</td>
	@endif
	<td>
		<center>{{ $equipment->weight.' kg' }}</center>
	</td>
	<td>
		<center>
			<button class="btn mv-md btn-inverse" onclick="deleteEquipment({{ $character->id.', '.$equipment->id }})">
				<i class="glyphicon glyphicon-trash"></i>
				Eliminar
			</button>
		</center>
	</td>
</tr>
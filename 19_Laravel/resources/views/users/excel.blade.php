<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre Completo</th>
			<th>Correo Electrónico</th>
			<th>Teléfono</th>
			<th>Dirección</th>
			<th>Género</th>
			<th>Rol</th>
			<th>Foto</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($users as $user)
		<tr>
			<td>{{ $user->id }}</td>
			<td>{{ $user->fullname }}</td>
			<td>{{ $user->email }}</td>	
			<td>{{ $user->phone }}</td>
			<td>{{ $user->address }}</td>
			<td>{{ $user->gender }}</td>
			<td>{{ $user->role }}</td>
			<td>
				<img src="{{ public_path().'/'.$user->photo }}" width="40px">
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

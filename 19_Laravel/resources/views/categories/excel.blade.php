<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Foto</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($categories as $category)
		<tr>
			<td>{{ $category->id }}</td>
			<td>{{ $category->name }}</td>
			<td>{{ $category->description }}</td>	
			<td>
				<img src="{{ public_path().'/'.$category->image }}" width="40px">
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

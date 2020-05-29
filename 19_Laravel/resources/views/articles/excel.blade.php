<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Título</th>
			<th>Contenido</th>
			<th>Imágen</th>
			<th>Usuario</th>
			<th>Categoría</th>
			<th>Precio</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($arts as $art)
		<tr>
			<td>{{ $art->id }}</td>
			<td>{{ $art->title }}</td>
			<td>{{ $art->content }}</td>

			<td>
				<img src="{{ public_path().'/'.$art->image }}" width="40px">
			</td>

			<td>{{ $art->user->fullname}}</td>
			<td>{{ $art->category->name}}</td>
			<td>{{ $art->price }}</td>
		</tr>
		@endforeach
	</tbody>
</table>